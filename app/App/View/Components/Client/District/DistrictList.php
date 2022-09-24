<?php

namespace App\View\Components\Client\District;

use Domain\District\Models\District;
use Illuminate\Support\Collection;
use Illuminate\View\Component;
use Illuminate\View\View;

class DistrictList extends Component
{
    public Collection $districts;

    public function __construct()
    {
        $this->loadDistricts();
    }

    public function render(): View
    {
        return view('components.client.district.district-list');
    }

    private function loadDistricts(): void
    {
        $this->districts = District::search(request()->get('qDistricts'))
            ->get();
    }
}
