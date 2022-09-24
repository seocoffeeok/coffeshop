<?php

namespace Domain\Brand\Models\Concerns;

trait HasBrandModelBreadcrumbs
{
    public function breadcrumbs(): array
    {
        return [
            getBreadcrumbItem(__('app.brands'), route('brands')),
            getBreadcrumbItem(__('app.repair_of_name_coffee_machines_in_kyiv', ['name' => $this->brand->name]), $this->brand->route()),
            getBreadcrumbItem(__('app.repair_of_name_coffee_machines_in_kyiv_brand', ['name' => $this->name, 'brand' => $this->brand->name]), $this->route()),
        ];
    }
}
