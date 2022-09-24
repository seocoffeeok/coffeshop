<?php

namespace App\Http\Controllers\Client\Staff;

use App\Http\Controllers\Controller;
use Domain\Staff\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\View\View;

class StaffViewController extends Controller
{
    public function __invoke(Request $request): View
    {
        $staff = $this->findStaff($request->route('slug'));

        return view('client.staff.view', [
            'staff' => $staff,
            'reviews' => $this->loadReviews($staff),
        ]);
    }

    private function findStaff(string $slug): Staff
    {
        /** @var Staff $staff */
        $staff = Staff::query()
            ->whereLocalized('slug', $slug)
            ->firstOrFail();

        return $staff;
    }

    private function loadReviews(Staff $staff): Collection
    {
        return $staff->reviews()
            ->where('approved', true)
            ->get();
    }
}
