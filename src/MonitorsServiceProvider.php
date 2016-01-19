<?php
    /**
     * Created by Elmar <e.abdurayimov@gmail.com> Abdurayimov
     *
     * @copyright (C)Copyright 2016 elmar.eatech.org
     *               Date: 1/11/16
     *               Time: 1:07 PM
     */
    namespace Akaramires\Monitors;

    use Illuminate\Support\ServiceProvider;

    class MonitorsServiceProvider extends ServiceProvider
    {
        /**
         * Bootstrap the application services.
         *
         * @return void
         */
        public function boot()
        {
            $this->publishes([
                __DIR__ . '/../config/monitors.php' => config_path('monitors.php'),
            ]);
        }

        /**
         * Register the application services.
         *
         * @return void
         */
        public function register()
        {
            $this->app->singleton('uptimerobot', function ($app, $params) {
                return (new Monitors())->createDriver('uptimerobot', $params);
            });
        }

        /**
         * Require composer's autoload file the packages.
         *
         * @return void
         **/
        protected function loadAutoloader($path)
        {
        }
    }
