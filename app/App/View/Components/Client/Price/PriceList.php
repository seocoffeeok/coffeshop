<?php

namespace App\View\Components\Client\Price;

use Domain\Price\Models\PriceGroup;
use Illuminate\Support\Collection;
use Illuminate\View\Component;
use Illuminate\View\View;

class PriceList extends Component
{
    public Collection $priceGroups;

    public function __construct()
    {
        $this->loadPriceGroups();
    }

    public function render(): View
    {
        return view('components.client.price.price-list');
    }

    private function loadPriceGroups(): void
    {
        $this->priceGroups = PriceGroup::all();
    }
}
