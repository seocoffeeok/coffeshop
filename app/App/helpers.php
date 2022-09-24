<?php

use Domain\Page\Repositories\PageRepository;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Spatie\Valuestore\Valuestore;
use Support\WeservImages\WeservImages;

if (!function_exists('weserv')) {
    function weserv(string $imageUrl): WeservImages
    {
        return WeservImages::make($imageUrl);
    }
}

if (!function_exists('pages')) {
    function pages(): PageRepository
    {
        return app(PageRepository::class);
    }
}

if (! function_exists('settings')) {
    function settings(string $key = null, $default = null): mixed
    {
        $valueStore = Valuestore::make(config('nova-settings-tool.path'));

        if ($key === null) {
            return $valueStore;
        }

        return $valueStore->get($key, $default);
    }
}

if (! function_exists('getBreadcrumbItem')) {
    function getBreadcrumbItem(string $name, string $url): array
    {
        return [
            'name' => $name,
            'url' => $url,
        ];
    }
}

if (! function_exists('getLocalizedUrl')) {
    function getLocalizedUrl(string $url, string $locale): string
    {
        return LaravelLocalization::getLocalizedUrl($locale, $url);
    }
}


if (! function_exists('locales')) {
    function locales(): array
    {
        $data = [];

        foreach (config('laravellocalization.supportedLocales') as $key => $locale) {
            $data[] = [
                'localizedUrl' => getLocalizedUrl(request()->url(), $key),
                'name' => $key,
                'isActive' => app()->getLocale() === $key,
            ];
        }

        return $data;
    }
}

