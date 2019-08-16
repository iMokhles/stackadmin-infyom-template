<?php


namespace iMokhles\StackAdminTemplate;

use Illuminate\Support\ServiceProvider;

class StackAdminTemplateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views', 'stackadmin-infyom-template');
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}