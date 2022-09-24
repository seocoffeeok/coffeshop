<?php

namespace App\Http\Controllers\Client\Type;

use App\Http\Controllers\Controller;
use Domain\Type\Models\Type;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TypeViewController extends Controller
{
    public function __invoke(Request $request): View
    {
        return view('client.type.view', [
            'type' => $this->findType(
                $request->route('slug'),
            ),
        ]);
    }

    private function findType(string $slug): Type
    {
        /** @var Type $district */
        $district = Type::query()
            ->whereLocalized('slug', $slug)
            ->firstOrFail();

        return $district;
    }
}
