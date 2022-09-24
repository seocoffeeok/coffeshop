<?php

namespace App\Http\Controllers\Client\Staff;

use App\Http\Controllers\Controller;
use Domain\Staff\Models\Staff;
use Illuminate\Support\Collection;
use Illuminate\View\View;

class StaffListController extends Controller
{
    public function __invoke(): View
    {
        return view('client.staff.list', [
            'staffs' => $this->loadStaffs(),
        ]);
    }

    private function loadStaffs(): Collection
    {
        return Staff::query()
            ->get();
    }
}
