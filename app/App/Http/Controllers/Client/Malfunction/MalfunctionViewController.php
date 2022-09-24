<?php

namespace App\Http\Controllers\Client\Malfunction;

use App\Http\Controllers\Controller;
use Domain\Malfunction\Models\Malfunction;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MalfunctionViewController extends Controller
{
    public function __invoke(Request $request): View
    {
        return view('client.malfunctions.view', [
            'malfunction' => $this->findMalfunction(
                $request->route('slug'),
            ),
        ]);
    }

    private function findMalfunction(string $slug): Malfunction
    {
        /** @var Malfunction $district */
        $district = Malfunction::query()
            ->whereLocalized('slug', $slug)
            ->firstOrFail();

        return $district;
    }
}
