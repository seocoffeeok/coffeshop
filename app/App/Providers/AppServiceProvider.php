<?php

namespace App\Providers;

use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        if ($this->app->isLocal()) {
            $this->app->register(IdeHelperServiceProvider::class);
        }
    }

    public function boot(): void
    {
        $this->bindEloquent();
    }

    private function bindEloquent(): void
    {
        Builder::macro('whereLocalized', function (string $attribute, ...$args) {
            $locale = app()->getLocale();

            return $this->where("{$attribute}->{$locale}", ...$args);
        });
    }
}
