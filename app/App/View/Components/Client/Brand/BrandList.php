<?php

namespace App\View\Components\Client\Brand;

use Domain\Brand\Models\Brand;
use Illuminate\Support\Collection;
use Illuminate\View\Component;
use Illuminate\View\View;

class BrandList extends Component
{
    public Collection $brands;
    private int $take;

    public function __construct(int $take = 100)
    {
        $this->take = $take;

        $this->loadBrands();
    }

    public function render(): View
    {
        return view('components.client.brand.brand-list');
    }

    private function loadBrands(): void
    {
        $this->brands = Brand::search(request()->get('qBrands'))
            ->take($this->take)
            ->get();
    }
}
