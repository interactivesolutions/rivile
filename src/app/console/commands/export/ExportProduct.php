<?php namespace interactivesolutions\rivile\app\console\commands\export;

use interactivesolutions\rivile\app\console\commands\RivileCore;
use interactivesolutions\rivile\database\models\N17Prod;

class ExportProduct extends RivileCore
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rivile:export-product {action} {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'EDIT_N17 - Export';

    /**
     * Initializing data
     */
    protected function init ()
    {
        $this->action = 'N17';

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

        $this->data = N17Prod::find($this->argument('id'))->toArray();
    }
}