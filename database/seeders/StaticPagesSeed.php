<?php

namespace Database\Seeders;

use Domain\Page\Models\Page;
use Illuminate\Database\Seeder;

class StaticPagesSeed extends Seeder
{
    public function run(): void
    {
        $pages = [
            $this->getPage(__('app.privacy_policy'), 'privacy-policy'),
            $this->getPage(__('app.user_agreement'), 'user-agreement'),
            $this->getPage(__('app.cookies_policy'), 'cookies-policy'),
            $this->getPage(__('app.delivery_and_payments_terms'), 'delivery-and-payments'),
            $this->getPage(__('app.return_and_exchange_terms'), 'return-and-exchange'),
        ];

        foreach ($pages as $page) {
            Page::query()->create($page);
        }
    }

    private function getPage(string $name, string $slug): array
    {
        return [
            'slug' => $slug,
            'meta_title' => [
                'ru' => $name,
                'ua' => $name,
            ],
            'meta_description' => [
                'ru' => $name . ' - описание',
                'ua' => $name . ' - описание',
            ],
            'body' => [
                'ua' => '<h1>Test page</h1>',
                'ru' => '<h1>Test page</h1>',
            ],
        ];
    }
}
