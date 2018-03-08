<?php

namespace ITPC\MyLangFileManager;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use ITPC\MyLangFileManager\app\Services\LangFiles;

class MyLangFileManagerServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.itpc
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public $routeFilePath = '/routes/itpc/mynewscrud.php';
    protected $namespace = 'ITPC\MyLangFileManager\app\Http\Controllers';

    public function boot()
    {

        $this->loadMigrationsFrom(__DIR__ . '/database/migrations/');
//        $this->loadViewsFrom(realpath(__DIR__.'/resources/views'), 'lang_file');

        // LOAD THE VIEWS
        // - first the published/overwritten views (in case they have any changes)
        $this->loadViewsFrom(resource_path('views/vendor/itpc/langfilemanager'), 'mylangfilemanager');
        // - then the stock views that come with the package, in case a published view might be missing
        $this->loadViewsFrom(realpath(__DIR__.'/resources/views'), 'mylangfilemanager');

        // $this->loadTranslationsFrom(realpath(__DIR__.'/resources/lang'), 'backpack');

        // publish config file
        $this->publishes([__DIR__.'/config/itpc/mylangfilemanager.php' => config_path('itpc/mylangfilemanager.php')], 'config');
        // publish views
        $this->publishes([__DIR__.'/resources/views' => resource_path('views/vendor/itpc/langfilemanager')], 'views');
        // publish lang files
        $this->publishes([__DIR__.'/resources/lang' => resource_path('lang/vendor/itpc')], 'lang');

        // use the vendor configuration file as fallback
        $this->mergeConfigFrom(__DIR__.'/config/itpc/mylangfilemanager.php', 'mylangfilemanager');
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function map(Router $router)
    {
        $router->group(
            [
                'namespace' => $this->namespace,
                'prefix' => config('backpack.base.route_prefix', 'admin'),
                'middleware' => ['web', 'admin'],
            ], function ($router) {
            require __DIR__.'/routes/itpc/mylangfilemanager.php';
        });
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerLangFileManager();
        $this->map($this->app->router);

        $this->app->singleton('mylangfile', function ($app) {
            return new LangFiles($app['config']['app']['locale']);
        });

        // use this if your package has a config file
        // config([
        //         'config/langfilemanager.php',
        // ]);
    }

    private function registerLangFileManager()
    {
        $this->app->bind('mylangfilemanager', function ($app) {
            return new LangFileManager($app);
        });
    }
}
