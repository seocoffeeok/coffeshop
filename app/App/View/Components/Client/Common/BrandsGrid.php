<?php

namespace App\View\Components\Client\Common;

use Illuminate\Support\Collection;
use Illuminate\View\Component;
use Illuminate\View\View;

class BrandsGrid extends Component
{
    public Collection $brands;

    public function __construct()
    {
        $this->loadBrands();
    }

    public function render(): View
    {
        return view('components.client.common.brands-grid');
    }

    private function loadBrands(): void
    {
        $this->brands = collect();
    }
}
