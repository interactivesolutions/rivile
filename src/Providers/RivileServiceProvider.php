<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Providers;

use Illuminate\Routing\Router;
use InteractiveSolutions\HoneycombCore\Providers\HCBaseServiceProvider;
use InteractiveSolutions\Rivile\Console\Commands\Export\ExportClient;
use InteractiveSolutions\Rivile\Console\Commands\GetClients;
use InteractiveSolutions\Rivile\Console\Commands\GetPayments;
use InteractiveSolutions\Rivile\Console\Commands\GetProducts;
use InteractiveSolutions\Rivile\Console\Commands\Import\ImportClients;
use InteractiveSolutions\Rivile\Console\Commands\Import\ImportPayments;
use InteractiveSolutions\Rivile\Console\Commands\Import\ImportProducts;
use InteractiveSolutions\Rivile\Console\Commands\RivileCore;
use InteractiveSolutions\Rivile\Console\Commands\Update\UpdateClients;
use InteractiveSolutions\Rivile\Console\Commands\Update\UpdatePayments;
use InteractiveSolutions\Rivile\Console\Commands\Update\UpdateProducts;
use InteractiveSolutions\Rivile\Repositories\N17ProdRepository;

/**
 * Class RivileServiceProvider
 * @package InteractiveSolutions\Rivile\Providers
 */
class RivileServiceProvider extends HCBaseServiceProvider
{
    /**
     * @var string
     */
    public $serviceProviderNameSpace = 'Rivile';

    /**
     * @var string
     */
    protected $homeDirectory = __DIR__;

    /**
     * @var array
     */
    protected $commands = [
        RivileCore::class,

        GetClients::class,
        GetProducts::class,
        GetPayments::class,

        ImportClients::class,
        ImportProducts::class,
        ImportPayments::class,

        UpdateClients::class,
        UpdateProducts::class,
        UpdatePayments::class,

        ExportClient::class,
    ];

    /**
     * @var string
     */
    protected $namespace = 'InteractiveSolutions\Rivile\Http\Controllers';

    /**
     *
     */
    public function register()
    {
        parent::register();

        $this->registerRepositories();
    }

    /**
     * @param Router $router
     */
    protected function registerRoutes(Router $router): void
    {
        $routes = [
            $this->modulePath('Routes/Admin/01_routes.rivile.clients.php'),
            $this->modulePath('Routes/Admin/02_routes.rivile.products.php'),
            $this->modulePath('Routes/Admin/03_routes.rivile.payments.php'),
            $this->modulePath('Routes/Admin/04_routes.rivile.dept.php'),

            $this->modulePath('Routes/Api/01_routes.rivile.clients.php'),
            $this->modulePath('Routes/Api/02_routes.rivile.products.php'),
            $this->modulePath('Routes/Api/03_routes.rivile.payments.php'),
            $this->modulePath('Routes/Api/04_routes.rivile.dept.php'),
        ];

        foreach ($routes as $route) {
            $router->group(['namespace' => $this->namespace], function($router) use ($route) {
                require $route;
            });
        }
    }

    /**
     *
     */
    protected function loadViews(): void
    {
        $this->loadViewsFrom($this->homeDirectory . '/../resources/views', $this->serviceProviderNameSpace);
    }

    /**
     *
     */
    protected function loadMigrations(): void
    {
        $this->loadMigrationsFrom($this->homeDirectory . '/../database/migrations');
    }

    /**
     *
     */
    protected function loadTranslations(): void
    {
        $this->loadTranslationsFrom($this->homeDirectory . '/../resources/lang', $this->serviceProviderNameSpace);
    }

    /**
     * @param string $path
     * @return string
     */
    private function modulePath(string $path): string
    {
        return __DIR__ . '/../' . $path;
    }

    /**
     *
     */
    private function registerRepositories(): void
    {
        $this->app->singleton(N17ProdRepository::class);
    }
}





