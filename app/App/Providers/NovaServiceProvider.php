<?php

namespace App\Providers;

use Bakerkretzmar\NovaSettingsTool\SettingsTool;
use Domain\User\Models\User;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Cards\Help;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;
use Scalemeup\UiTranslations\UiTranslations;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    public function boot(): void
    {
        parent::boot();
    }

    protected function routes(): void
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    protected function gate(): void
    {
        Gate::define('viewNova', function (User $user) {
            return in_array($user->email, [
                //
            ]);
        });
    }

    protected function cards(): array
    {
        return [
            new Help,
        ];
    }

    protected function dashboards(): array
    {
        return [];
    }

    public function tools(): array
    {
        return [
            new SettingsTool(),
            new UiTranslations(),
        ];
    }

    public function register(): void
    {
        //
    }
}
