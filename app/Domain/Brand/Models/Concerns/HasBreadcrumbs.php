<?php

namespace Domain\Brand\Models\Concerns;

trait HasBreadcrumbs
{
    public function breadcrumbs(): array
    {
        return [
            getBreadcrumbItem(__('app.brands'), route('brands')),
            getBreadcrumbItem(__('app.repair_of_name_coffee_machines_in_kyiv', ['name' => $this->name]), $this->route()),
        ];
    }
}
