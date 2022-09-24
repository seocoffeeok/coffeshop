<?php

namespace App\Http\Controllers\Client\Page;

use App\Http\Controllers\Controller;
use Domain\Page\Models\Page;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageViewController extends Controller
{
    public function __invoke(Request $request): View
    {
        return view('client.page.view', [
            'page' => $this->findPage(
                $request->route('slug'),
            )
        ]);
    }

    private function findPage(string $slug): Page
    {
        /** @var Page $page */
        $page = Page::query()
            ->where('slug', $slug)
            ->firstOrFail();

        return $page;
    }
}
