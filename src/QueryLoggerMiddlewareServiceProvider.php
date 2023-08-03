<?php

namespace Zxygel0913\QueryLoggerMiddleware;

use Illuminate\Support\ServiceProvider;

class QueryLoggerMiddlewareServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/query-logger.php', 'query-logger');

        $this->publishes([
            __DIR__.'/../config/query-logger.php' => config_path('query-logger.php'),
        ], 'config');
    }

    public function boot()
    {
        $this->app['router']->aliasMiddleware('logqueries', LogQueries::class);
    }
}
