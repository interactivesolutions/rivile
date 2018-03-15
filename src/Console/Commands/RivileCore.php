<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Console\Commands;

use DB;
use Illuminate\Console\Command;
use SimpleXMLElement;
use SoapClient;

/**
 * Class RivileCore
 * @package InteractiveSolutions\Rivile\Console\Commands
 */
class RivileCore extends Command
{
    /**
     * Get action
     */
    const ACTION_METHOD_GET = 'GET';
    /**
     * New action
     */
    const ACTION_METHOD_NEW = 'NEW';
    /**
     * Update action
     */
    const ACTION_METHOD_UPDATE = 'UPDATE';
    /**
     * Delete action
     */
    const ACTION_METHOD_DELETE = 'DELETE';
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rivile';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'A core rivile command file';
    /**
     * Action to execute
     *
     * @var
     */
    protected $action;
    /**
     * XML root name
     */
    protected $xmlRootName;
    /**
     * Setting action method
     * @var
     */
    protected $actionMethod;
    /**
     * Operation what will be done with data
     * Required only for UPDATE / DELETE / NEW
     * Is set automatically
     *
     * @var
     */
    protected $operation;
    /**
     * List type for retrieving data
     *
     * @var
     */
    protected $listType;
    /**
     * Filters for retrieving data
     *
     * @var
     */
    protected $filters;
    /**
     * PDF invoice type
     *
     * @var
     */
    protected $mod;
    /**
     * Data for update / create / delete
     *
     * @var
     */
    protected $data;
    /**
     * Main URL
     *
     * @var
     */
    private $url;
    /**
     * Rivile Key
     *
     * @var
     */
    private $key;

    /**
     * Execute the console command
     *
     * @throws \Exception
     */
    public function handle()
    {
        $this->comment($this->description);
        $this->init();
        $this->validate();
        $this->makeCall();
    }

    /**
     * Function returns XML string for input associative array.
     * @param array $array Input associative array
     * @param string $wrap Wrapping tag
     * @param bool $upper To set tags in uppercase
     * @return string
     */
    function array2xml(array $array, string $wrap = 'ROW0', bool $upper = true)
    {
        // set initial value for XML string
        $xml = '';
        // wrap XML with $wrap TAG
        if ($wrap != null) {
            $xml .= "<$wrap>\n";
        }
        // main loop
        foreach ($array as $key => $value) {
            // set tags in uppercase if needed
            if ($upper == true) {
                $key = strtoupper($key);
            }
            // append to XML string
            $xml .= "<$key>" . htmlspecialchars(trim((string)$value)) . "</$key>";
        }
        // close wrap TAG if needed
        if ($wrap != null) {
            $xml .= "\n</$wrap>\n";
        }

        // return prepared XML string
        return $xml;
    }

    /**
     * Initializing action data
     */
    protected function init()
    {
    }

    /**
     * @throws \Exception
     */
    protected function makeCall()
    {
        $soapClient = new SoapClient($this->url);

        switch ($this->actionMethod) {
            case self::ACTION_METHOD_GET:
                switch ($this->getAction()) {
                    case 'PDF_INVOICE':
                        $this->_handleResponse($this->xmlToArray($soapClient->{$this->getAction()}(
                            $this->key,
                            $this->filters,
                            $this->mod
                        )));
                        break;
                    case 'GET_I17_LIST':
                        $this->_handleResponse($this->xmlToArray($soapClient->{$this->getAction()}(
                            $this->key,
                            $this->filters
                        )));
                        break;

                    default:
                        if ($this->listType && $this->filters) {
                            $this->_handleResponse($this->xmlToArray($soapClient->{$this->getAction()}(
                                $this->key,
                                $this->listType,
                                $this->filters
                            )));
                        } elseif ($this->listType) {
                            $this->_handleResponse($this->xmlToArray($soapClient->{$this->getAction()}(
                                $this->key,
                                $this->listType
                            )));
                        } else {
                            $this->_handleResponse($this->xmlToArray($soapClient->{$this->getAction()}($this->key)));
                        }
                        break;
                }

                break;

            case self::ACTION_METHOD_DELETE:
            case self::ACTION_METHOD_NEW:
            case self::ACTION_METHOD_UPDATE:
                array_forget($this->data, ['id', 'count', 'created_at', 'updated_at', 'deleted_at']);

                $xml = $this->array2xml($this->data, $this->action, true);

                $this->_handleResponse($this->xmlToArray($soapClient->{$this->getAction()}(
                    $this->key,
                    $this->operation,
                    $xml
                )));
                break;
        }
    }

    /**
     * @param array $response
     * @throws \Exception
     */
    protected function _handleResponse(array $response)
    {
        DB::beginTransaction();

        try {
            $this->handleResponse($response);
        } catch (\Exception $exception) {
            DB::rollback();
            throw $exception;
        }

        DB::commit();
    }

    /**
     * @param array $response
     * @throws \Exception
     */
    protected function handleResponse(array $response)
    {
        if (isset($response['error'])) {
            throw new \Exception($response['error']);
        }
    }

    /**
     * @param array $list
     */
    protected function clearEmptySpaces(array &$list)
    {
        foreach ($list as &$string) {
            if (is_array($string)) {
                $this->clearEmptySpaces($string);
            } elseif (!is_null($string)) {
                $string = trim($string);
            }
        }
    }

    /**
     * Validating configurations
     *
     * @throws \Exception
     */
    private function validate()
    {
        $this->url = config('rivile.url');
        $this->key = config('rivile.key');

        // todo: check is set $this->xmlRootName

        if ($this->key == '') {
            throw new \Exception('ISR-0001 : ' . trans('Rivile::errors.key_not_found'));
        }

        if (!$this->action) {
            throw new \Exception('ISR-0002 : ' . trans('Rivile::errors.no_action_specified'));
        }

        if (!$this->actionMethod) {
            throw new \Exception('ISR-0003 : ' . trans('Rivile::errors.no_action_method_specified'));
        }
    }

    /**
     * @param $response
     * @return array|mixed
     * @throws \Exception
     */
    private function xmlToArray($response)
    {
        $response = preg_replace("/(<\/?)(\w+):([^>]*>)/", "$1$2$3", $response);
        $response = preg_replace('#&(?=[a-z_0-9]+=)#', '&amp;', $response);

        $response = str_replace('&#x1A;', '', $response);

        $xml = new SimpleXMLElement($response);
        $array = json_decode(json_encode((array)$xml), true);

        if (isset($array['ERROR'])) {
            $message = '';

            if (!is_array($array['ERROR'])) {
                $array['ERROR'] = [$array['ERROR']];
            }

            foreach ($array['ERROR'] as $key => $error) {
                $message .= $key . ' ' . $error;
            }

            throw new \Exception($message);
        }

        switch ($this->getAction()) {
            case 'PDF_INVOICE':
                $array = $this->clearArrayFromEmptyArrays($array);
                break;
            default:
                $array = $this->clearArrayFromEmptyArrays(array_get($array, $this->xmlRootName, []));
                break;
        }

        return $array;
    }

    /**
     * @param array $array
     * @return array
     */
    private function clearArrayFromEmptyArrays(array $array)
    {
        foreach ($array as &$item) {
            if (gettype($item) == 'array') {
                if (sizeof($item) <= 1) {
                    $item = null;
                } else {
                    $item = $this->clearArrayFromEmptyArrays($item);
                }
            }
        }

        return $array;
    }

    /**
     * @return string
     */
    private function getAction()
    {
        switch ($this->actionMethod) {
            case self::ACTION_METHOD_GET:
                if ($this->action == 'PDF_INVOICE') {
                    return 'PDF_INVOICE';
                }

                return 'GET_' . $this->action . '_LIST';

            case self::ACTION_METHOD_UPDATE:
            case self::ACTION_METHOD_NEW:
            case self::ACTION_METHOD_DELETE:
                return 'EDIT_' . $this->action;
        }
    }
}
