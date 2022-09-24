<?php

namespace App\View\Components\Client\Districts;

use Domain\District\Models\District;
use Illuminate\Support\Collection;
use Illuminate\View\Component;
use Illuminate\View\View;

class FooterList extends Component
{
    public Collection $districts;
    public int $viewCount = 2;

    public function __construct()
    {
        $this->districts = $this->loadDistricts();
    }

    public function render(): View
    {
        return view('components.client.districts.footer-list');
    }

    private function loadDistricts(): Collection
    {
        return District::all()
            ->map(function (District $district): array {
                return [
                    'name' => $district->name,
                    'url' => $district->route(),
                ];
            });
    }
}
