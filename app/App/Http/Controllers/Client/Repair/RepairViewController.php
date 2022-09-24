<?php

namespace App\Http\Controllers\Client\Repair;

use App\Http\Controllers\Controller;
use Domain\Repair\Models\Repair;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RepairViewController extends Controller
{
    public function __invoke(Request $request): View
    {
        return view('client.repair.view', [
            'repair' => $this->findRepair(
                $request->route('slug'),
            ),
        ]);
    }

    private function findRepair(string $slug): Repair
    {
        /** @var Repair $district */
        $district = Repair::query()
            ->whereLocalized('slug', $slug)
            ->firstOrFail();

        return $district;
    }
}
