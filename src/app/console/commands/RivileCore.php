<?php namespace interactivesolutions\rivile\app\console\commands;

use Illuminate\Console\Command;

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
     * RivileCore constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->url = config('rivile.url');
        $this->key = config('rivile.key');

        if ($this->key == '')
            throw new \Exception('ISR-0001 : ' . trans('Rivile::errors.key_not_found'));
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle ()
    {
        $this->info(trans('Rivile::app.ready'));
    }
}