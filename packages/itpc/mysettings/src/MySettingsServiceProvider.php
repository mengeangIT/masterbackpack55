<?php

namespace ITPC\MySettings;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use ITPC\MySettings\app\Models\Setting as Setting;
//use Config;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
//use Route;

class MySettingsServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Where the route file lives, both inside the package and in the app (if overwritten).
     *
     * @var string
     */
    public $routeFilePath = '/routes/itpc/settings.php';
    protected $namespace = 'ITPC\MySettings\app\Http\Controllers';


    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {

        $this->loadViewsFrom(realpath(__DIR__.'/resources/views'), 'myserting');

        // only use the Settings package if the Settings table is present in the database
        if (!App::runningInConsole() && count(Schema::getColumnListing('settings'))) {
            // get all settings from the database
            $settings = Setting::all();

            // bind all settings to the Laravel config, so you can call them like
            // Config::get('settings.contact_email')
            foreach ($settings as $key => $setting) {
                Config::set('settings.'.$setting->key, $setting->value);
            }
        }

        $this->loadMigrationsFrom(__DIR__ . '/database/migrations/');

        // publish the migrations and seeds
//        $this->publishes([__DIR__.'/database/migrations/' => database_path('migrations')], 'migrations');

        // publish translation files
        $this->publishes([__DIR__.'/resources/lang' => resource_path('lang/vendor/itpc')], 'lang');
    }

    /**
     * Define the routes for the application.
     *
     * @param \Illuminate\Routing\Router $router
     *
     * @return void

    public function setupRoutes(Router $router)
    {
        // by default, use the routes file provided in vendor
        $routeFilePathInUse = __DIR__.$this->routeFilePath;

        // but if there's a file with the same name in routes/backpack, use that one
        if (file_exists(base_path().$this->routeFilePath)) {
            $routeFilePathInUse = base_path().$this->routeFilePath;
        }

        $this->loadRoutesFrom($routeFilePathInUse);
    }
     */
    public function map(Router $router)
    {
        $router->group(
            [
                'namespace' => $this->namespace,
                'prefix' => config('backpack.base.route_prefix', 'admin'),
                'middleware' => ['web', 'admin'],
            ], function ($router) {
            require __DIR__.'/routes/itpc/mysettings.php';
        });
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        // define the routes for the application
        $this->map($this->app->router);
        $this->registerSettings();
    }

    private function registerSettings()
    {
        $this->app->bind('settings', function ($app) {
            return new Settings($app);
        });
    }
}
