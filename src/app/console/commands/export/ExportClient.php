<?php namespace interactivesolutions\rivile\app\console\commands\export;

use interactivesolutions\rivile\app\console\commands\RivileCore;
use interactivesolutions\rivile\database\models\N08Klij;

class ExportClient extends RivileCore
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rivile:export-client {action} {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'GET_N08_LIST - Import';

    /**
     * Initializing data
     */
    protected function init ()
    {
        $this->action = 'N08';

        switch ($this->argument('action'))
        {
            case "new":

                $this->operation = 'I';
                $this->actionMethod = self::ACTION_METHOD_NEW;
                break;

            case "update":

                $this->operation = 'U';
                $this->actionMethod = self::ACTION_METHOD_UPDATE;
                break;
        }

        $this->data = N08Klij::find($this->argument('id'))->toArray();
    }
}