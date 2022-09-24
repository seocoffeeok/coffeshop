<?php

namespace App\Http\Controllers\Client\About;

use App\Http\Controllers\Controller;
use Domain\Page\Models\Page;
use Illuminate\View\View;

class AboutViewController extends Controller
{
    public function __invoke(): View
    {
        return view('client.about.view', [
            'page' => $this->findPage(),
        ]);
    }

    private function findPage(): Page
    {
        /** @var Page $page */
        $page = Page::query()
            ->where('slug', 'about')
            ->firstOrFail();

        return $page;
    }
}
