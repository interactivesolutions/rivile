<?php

namespace InteractiveSolutions\Rivile\Console\Commands\Export;

use InteractiveSolutions\Rivile\Console\Commands\RivileCore;
use InteractiveSolutions\Rivile\Models\N17Prod;

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
    protected function init()
    {
        $this->action = 'N17';

        switch ($this->argument('action')) {
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