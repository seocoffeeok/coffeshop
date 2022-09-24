<?php

namespace App\Http\Controllers\Client\District;

use App\Http\Controllers\Controller;
use Domain\District\Models\District;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DistrictViewController extends Controller
{
    public function __invoke(Request $request): View
    {
        return view('client.districts.view', [
            'district' => $this->findDistrict(
                $request->route('slug'),
            ),
        ]);
    }

    private function findDistrict(string $slug): District
    {
        /** @var District $district */
        $district = District::query()
            ->whereLocalized('slug', $slug)
            ->firstOrFail();

        return $district;
    }
}
