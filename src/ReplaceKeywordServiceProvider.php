<?php

namespace Joy\ReplaceKeyword;

use Illuminate\Support\ServiceProvider;

class ReplaceKeywordServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'joy-replace-keyword');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'joy-replace-keyword');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/replace-keyword.php', 'joy-replace-keyword');

        // Register the service the package provides.
        $this->app->singleton('joy-replace-keyword', function ($app) {
            return new ReplaceKeyword;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['joy-replace-keyword'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/replace-keyword.php' => config_path('joy-replace-keyword.php'),
        ], 'joy-replace-keyword.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/joy-replace-keyword'),
        ], 'replace-keyword.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/joy-replace-keyword'),
        ], 'replace-keyword.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/joy-replace-keyword'),
        ], 'replace-keyword.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
