<?php namespace MakerspaceInnovhub\Makerspace;
use MakerspaceInnovhub\Makerspace\Middleware\CustomMiddleware;
use MakerspaceInnovhub\Makerspace\Middleware\VerifyCsrf;
use System\Classes\PluginBase;

/**
 * Plugin class
 */
class Plugin extends PluginBase
{
    /**
     * register method, called when the plugin is first registered.
     */
    public function register()
    {
    }

    /**
     * boot method, called right before the request route.
     */
    public function boot()
    {
        $this->app['router']->pushMiddlewareToGroup('api', CustomMiddleware::class);
        $this->app['router']->aliasMiddleware('web', VerifyCsrf::class);
    }
    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents()
    {
    }

    /**
     * registerSettings used by the backend.
     */
    public function registerSettings()
    {
    }
}