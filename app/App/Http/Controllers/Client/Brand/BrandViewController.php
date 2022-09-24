<?php

namespace App\Http\Controllers\Client\Brand;

use App\Http\Controllers\Controller;
use Domain\Brand\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BrandViewController extends Controller
{
    public function __invoke(Request $request): View
    {
        return view('client.brands.view', [
            'brand' => $this->findBrand(
                $request->route('slug'),
            ),
        ]);
    }

    private function findBrand(string $slug): Brand
    {
        /** @var Brand $brand */
        $brand = Brand::query()
            ->whereLocalized('slug', $slug)
            ->firstOrFail();

        return $brand;
    }
}
