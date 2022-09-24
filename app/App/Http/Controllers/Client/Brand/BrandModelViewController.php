<?php

namespace App\Http\Controllers\Client\Brand;

use App\Http\Controllers\Controller;
use Domain\Brand\Models\BrandModel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BrandModelViewController extends Controller
{
    public function __invoke(Request $request): View
    {
        return view('client.brands.view-model', [
            'brandModel' => $this->findBrandModel(
                $request->route('slug'),
                $request->route('model'),
            ),
        ]);
    }

    private function findBrandModel(string $slug, string $model): BrandModel
    {
        /** @var BrandModel $brandModel */
        $brandModel = BrandModel::query()
            ->whereLocalized('slug', $slug)
            ->whereHas('brand', function (Builder $builder) use ($model): Builder {
                return $builder->whereLocalized('slug', $model);
            })
            ->firstOrFail();

        return $brandModel;
    }
}
