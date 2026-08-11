<?php

declare(strict_types=1);

namespace Zitro\Currency;

use Illuminate\Support\ServiceProvider;

class CurrencyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/currency.php', 'currency');

        $this->app->singleton(Currency::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->publishes([
            __DIR__.'/../config/currency.php' => config_path('currency.php'),
        ], ['currency', 'currency-config']);
    }
}
