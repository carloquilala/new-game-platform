<?php

namespace JSystems\NewGame;

use Illuminate\Support\ServiceProvider;

class NewGameServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // register controllers
        $this->app->make('JSystems\NewGame\Http\Controllers\UsersController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // config path of the package
        $path = $this->getConfigPath('jsystems.config.php');

        $this->publishes([
            $path => config_path('jsystems.config.php')
        ], 'jsystems.config');
    }

    private function getConfigPath($file)
    {
        return __DIR__ . '/../config/' . $file;
    }
}
