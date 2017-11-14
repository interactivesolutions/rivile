<?php

namespace InteractiveSolutions\Rivile\Console\Commands;

use Illuminate\Console\Command;
use DB;
use SimpleXMLElement;
use SoapClient;

class RivileCore extends Command
{
    /**
     * Action list
     */
    const ACTION_METHOD_GET = 'GET';
    const ACTION_METHOD_NEW = 'NEW';
    const ACTION_METHOD_UPDATE = 'UPDATE';
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
     * @return mixed
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
     * Initializing action data
     */
    protected function init()
    {

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

    protected function makeCall()
    {
        $soapClient = new SoapClient($this->url);

        switch ($this->actionMethod) {
            case self::ACTION_METHOD_GET :

                if ($this->listType && $this->filters) {
                    $this->_handleResponse($this->xmlToArray($soapClient->{$this->getAction()}($this->key,
                        $this->listType, $this->filters)));
                } elseif ($this->listType) {
                    $this->_handleResponse($this->xmlToArray($soapClient->{$this->getAction()}($this->key,
                        $this->listType)));
                } else {
                    $this->_handleResponse($this->xmlToArray($soapClient->{$this->getAction()}($this->key)));
                }

                break;

            case self::ACTION_METHOD_DELETE :
            case self::ACTION_METHOD_NEW :
            case self::ACTION_METHOD_UPDATE:


                array_forget($this->data, ['id', 'count', 'created_at', 'updated_at', 'deleted_at']);

                $xml = $this->array2xml($this->data, $this->action, true);

                $this->_handleResponse($this->xmlToArray($soapClient->{$this->getAction()}($this->key, $this->operation,
                    $xml)));
                break;
        }
    }

    protected function _handleResponse(array $response)
    {
        DB::beginTransaction();

        try {
            $this->handleResponse($response);
        } catch (\Exception $e) {
            DB::rollback();
            throw new \Exception($e);
        }

        DB::commit();
    }

    protected function handleResponse(array $response)
    {
        if (isset($response['error'])) {
            throw new \Exception($response['error']);
        }
    }

    private function xmlToArray($response)
    {
        $response = preg_replace("/(<\/?)(\w+):([^>]*>)/", "$1$2$3", $response);
        $response = preg_replace('#&(?=[a-z_0-9]+=)#', '&amp;', $response);

        //$response = file_get_contents('data.xml');
        $response = str_replace('&#x1A;', '', $response);

        $xml = new SimpleXMLElement($response);
        $array = json_decode(json_encode((array)$xml), true);

        if (isset($array['ERROR'])) {
            $message = '';

            foreach ($array['ERROR'] as $key => $error) {
                $message .= $key . ' ' . $error;
            }

            throw new \Exception($message);

        }

        $array = $this->clearArrayFromEmptyArrays($array[$this->xmlRootName]);

        return $array;
    }

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

    private function getAction()
    {
        switch ($this->actionMethod) {
            case self::ACTION_METHOD_GET :

                return 'GET_' . $this->action . '_LIST';

            case self::ACTION_METHOD_UPDATE :
            case self::ACTION_METHOD_NEW :
            case self::ACTION_METHOD_DELETE :

                return 'EDIT_' . $this->action;
        }
    }

    /**
     * Function returns XML string for input associative array.
     * @param Array $array Input associative array
     * @param String $wrap Wrapping tag
     * @param Boolean $upper To set tags in uppercase
     * @return string
     */
    function array2xml($array, $wrap = 'ROW0', $upper = true)
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
            $xml .= "<$key>" . htmlspecialchars(trim($value)) . "</$key>";
        }
        // close wrap TAG if needed
        if ($wrap != null) {
            $xml .= "\n</$wrap>\n";
        }

        // return prepared XML string
        return $xml;
    }

    protected function clearEmptySpaces(array &$list)
    {
        foreach ($list as &$string) {
            while ($string[strlen($string) - 1] == ' ') {
                $string = substr($string, 0, -1);
            }
        }
    }
}