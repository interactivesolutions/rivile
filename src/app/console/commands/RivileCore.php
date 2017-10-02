<?php namespace interactivesolutions\rivile\app\console\commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use SimpleXMLElement;
use SoapClient;

class RivileCore extends Command
{
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
     * Action to execute
     *
     * @var
     */
    protected $action;

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
    private $operation;

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
     * Action list
     */
    const ACTION_METHOD_GET = 'GET';
    const ACTION_METHOD_NEW = 'NEW';
    const ACTION_METHOD_UPDATE = 'UPDATE';
    const ACTION_METHOD_DELETE = 'DELETE';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle ()
    {
        $this->comment($this->description);
        $this->init();
        $this->validate();
        $this->makeCall ();
    }

    protected function makeCall ()
    {
        $soapClient = new SoapClient($this->url);

        switch ($this->actionMethod)
        {
            case self::ACTION_METHOD_GET :

                if ($this->listType && $this->filters)
                    $this->_handleResponse($this->xmlToArray($soapClient->{$this->getAction()}($this->key, $this->listType, $this->filters)));
                elseif ($this->listType)
                    $this->_handleResponse($this->xmlToArray($soapClient->{$this->getAction()}($this->key, $this->listType)));
                else
                    $this->_handleResponse($this->xmlToArray($soapClient->{$this->getAction()}($this->key)));

                break;

            case self::ACTION_METHOD_DELETE :
            case self::ACTION_METHOD_NEW :
            case self::ACTION_METHOD_UPDATE:

                $this->_handleResponse($this->xmlToArray($soapClient->{$this->getAction()}($this->key, $this->operation, $this->data)));
                break;
        }
    }

    private function getAction ()
    {
        switch ($this->actionMethod)
        {
            case self::ACTION_METHOD_GET :

                return'GET_' . $this->action . '_LIST';
                break;
        }
    }

    private function xmlToArray($response)
    {
        $response = preg_replace("/(<\/?)(\w+):([^>]*>)/", "$1$2$3", $response);
        $response = preg_replace('#&(?=[a-z_0-9]+=)#', '&amp;', $response);

        //$response = file_get_contents('data.xml');
        $response = str_replace('&#x1A;', '', $response);

        $xml = new SimpleXMLElement($response);
        $array = json_decode(json_encode((array)$xml), TRUE);

        $array = $this->clearArrayFromEmptyArrays($array[$this->action]);

        return $array;
    }

    private function clearArrayFromEmptyArrays (array $array)
    {
        foreach ($array as &$item)
        {
            if (gettype($item) == 'array')
            {
                if (sizeof($item) <= 1)
                    $item = null;
                else
                    $item = $this->clearArrayFromEmptyArrays($item);
            }
        }

        return $array;
    }

    protected function _handleResponse(array $response)
    {
        DB::beginTransaction();

        try {
            $this->handleResponse($response);
        } catch (\Exception $e)
        {
            DB::rollback();
            throw new \Exception($e);
        }

        DB::commit();
    }

    protected function handleResponse (array $response)
    {

    }

    /**
     * Initializing action data
     */
    protected function init ()
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

        if ($this->key == '')
            throw new \Exception('ISR-0001 : ' . trans('Rivile::errors.key_not_found'));

        if (!$this->action)
            throw new \Exception('ISR-0002 : ' . trans('Rivile::errors.no_action_specified'));

        if (!$this->actionMethod)
            throw new \Exception('ISR-0003 : ' . trans('Rivile::errors.no_action_method_specified'));
    }

    protected function clearEmptySpaces (array &$list)
    {
        foreach ($list as &$string)
            while($string[strlen($string) - 1] == ' ')
                $string = substr($string, 0, -1);
    }
}