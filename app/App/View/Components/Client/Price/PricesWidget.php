<?php

namespace App\View\Components\Client\Price;

use Domain\Price\Models\PriceGroup;
use Illuminate\Support\Collection;
use Illuminate\View\Component;
use Illuminate\View\View;

class PricesWidget extends Component
{
    public Collection $priceGroups;

    public function __construct()
    {
        $this->getPriceGroups();
    }

    public function render(): View
    {
        return view('components.client.price.prices-widget');
    }

    private function getPriceGroups(): void
    {
        $this->priceGroups = PriceGroup::query()
            ->take(3)
            ->get();
    }
}
