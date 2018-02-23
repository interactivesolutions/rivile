<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Providers;

use Illuminate\Routing\Router;
use InteractiveSolutions\HoneycombCore\Providers\HCBaseServiceProvider;
use InteractiveSolutions\Rivile\Console\Commands\Export\ExportClient;
use InteractiveSolutions\Rivile\Console\Commands\Export\ExportN37Pmat;
use InteractiveSolutions\Rivile\Console\Commands\Export\ExportProduct;
use InteractiveSolutions\Rivile\Console\Commands\GetClients;
use InteractiveSolutions\Rivile\Console\Commands\GetDept;
use InteractiveSolutions\Rivile\Console\Commands\GetI06List;
use InteractiveSolutions\Rivile\Console\Commands\GetInternalGoods;
use InteractiveSolutions\Rivile\Console\Commands\GetPayments;
use InteractiveSolutions\Rivile\Console\Commands\GetProducts;
use InteractiveSolutions\Rivile\Console\Commands\Import\ImportClients;
use InteractiveSolutions\Rivile\Console\Commands\Import\ImportDept;
use InteractiveSolutions\Rivile\Console\Commands\Import\ImportI06List;
use InteractiveSolutions\Rivile\Console\Commands\Import\ImportInternalGoods;
use InteractiveSolutions\Rivile\Console\Commands\Import\ImportPayments;
use InteractiveSolutions\Rivile\Console\Commands\Import\ImportProducts;
use InteractiveSolutions\Rivile\Console\Commands\RivileCore;
use InteractiveSolutions\Rivile\Console\Commands\Update\UpdateClients;
use InteractiveSolutions\Rivile\Console\Commands\Update\UpdateDept;
use InteractiveSolutions\Rivile\Console\Commands\Update\UpdateI06List;
use InteractiveSolutions\Rivile\Console\Commands\Update\UpdateInternalGoods;
use InteractiveSolutions\Rivile\Console\Commands\Update\UpdatePayments;
use InteractiveSolutions\Rivile\Console\Commands\Update\UpdateProducts;
use InteractiveSolutions\Rivile\Repositories\I04AthRepository;
use InteractiveSolutions\Rivile\Repositories\I05AtdRepository;
use InteractiveSolutions\Rivile\Repositories\I06ParhRepository;
use InteractiveSolutions\Rivile\Repositories\I07PardRepository;
use InteractiveSolutions\Rivile\Repositories\I08PartRepository;
use InteractiveSolutions\Rivile\Repositories\I09VihRepository;
use InteractiveSolutions\Rivile\Repositories\I10VidRepository;
use InteractiveSolutions\Rivile\Repositories\I13PamoRepository;
use InteractiveSolutions\Rivile\Repositories\I17VproRepository;
use InteractiveSolutions\Rivile\Repositories\I33PkaiRepository;
use InteractiveSolutions\Rivile\Repositories\I44SkolRepository;
use InteractiveSolutions\Rivile\Repositories\I64LojoRepository;
use InteractiveSolutions\Rivile\Repositories\N08KlijRepository;
use InteractiveSolutions\Rivile\Repositories\N13AkcRepository;
use InteractiveSolutions\Rivile\Repositories\N17ProdRepository;
use InteractiveSolutions\Rivile\Repositories\N26KompRepository;
use InteractiveSolutions\Rivile\Repositories\N31NuodRepository;
use InteractiveSolutions\Rivile\Repositories\N32PabcRepository;
use InteractiveSolutions\Rivile\Repositories\N33KbanRepository;
use InteractiveSolutions\Rivile\Repositories\N37PmatRepository;
use InteractiveSolutions\Rivile\Repositories\N40AbarRepository;
use InteractiveSolutions\Rivile\Repositories\N64LojRepository;
use InteractiveSolutions\Rivile\Repositories\N87TpreRepository;
use InteractiveSolutions\Rivile\Repositories\T03SdocRepository;
use InteractiveSolutions\Rivile\Services\I06ParhService;

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
        GetDept::class,
        GetI06List::class,
        GetInternalGoods::class,
        GetPayments::class,
        GetProducts::class,

        ImportClients::class,
        ImportDept::class,
        ImportI06List::class,
        ImportInternalGoods::class,
        ImportPayments::class,
        ImportProducts::class,

        UpdateClients::class,
        UpdateDept::class,
        UpdateI06List::class,
        UpdateInternalGoods::class,
        UpdatePayments::class,
        UpdateProducts::class,

        ExportClient::class,
        ExportProduct::class,
        ExportN37Pmat::class,
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

        $this->registerConfig();
        $this->registerRepositories();
        $this->registerServices();
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
            $router->group(['namespace' => $this->namespace], function ($router) use ($route) {
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

    private function registerConfig(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/rivile.php', 'rivile'
        );
    }

    /**
     *
     */
    private function registerRepositories(): void
    {
        $this->app->singleton(I04AthRepository::class);
        $this->app->singleton(I05AtdRepository::class);
        $this->app->singleton(I06ParhRepository::class);
        $this->app->singleton(I07PardRepository::class);
        $this->app->singleton(I08PartRepository::class);
        $this->app->singleton(I09VihRepository::class);
        $this->app->singleton(I10VidRepository::class);
        $this->app->singleton(I13PamoRepository::class);
        $this->app->singleton(I17VproRepository::class);
        $this->app->singleton(I33PkaiRepository::class);
        $this->app->singleton(I44SkolRepository::class);
        $this->app->singleton(I64LojoRepository::class);
        $this->app->singleton(N08KlijRepository::class);
        $this->app->singleton(N13AkcRepository::class);
        $this->app->singleton(N17ProdRepository::class);
        $this->app->singleton(N26KompRepository::class);
        $this->app->singleton(N31NuodRepository::class);
        $this->app->singleton(N32PabcRepository::class);
        $this->app->singleton(N33KbanRepository::class);
        $this->app->singleton(N37PmatRepository::class);
        $this->app->singleton(N40AbarRepository::class);
        $this->app->singleton(N64LojRepository::class);
        $this->app->singleton(N87TpreRepository::class);
        $this->app->singleton(T03SdocRepository::class);
    }

    private function registerServices(): void
    {
        $this->app->singleton(I06ParhService::class);
    }

    /**
     * @param string $path
     * @return string
     */
    private function modulePath(string $path): string
    {
        return __DIR__ . '/../' . $path;
    }
}
