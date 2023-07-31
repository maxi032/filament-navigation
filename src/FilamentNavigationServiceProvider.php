<?php

namespace maxi032\FilamentNavigation;

use Illuminate\Support\ServiceProvider;

class FilamentNavigationServiceProvider extends ServiceProvider
{

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../resources/lang' => resource_path('lang/vendor/maxi032-filament-navigation-translations'),
            ], 'filament-navigation-translations');
        }

        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'maxi032-filament-navigation-translations');
    }
}
