<?php

namespace Domain\District\Models\Concerns;

trait HasBreadcrumbs
{
    public function breadcrumbs(): array
    {
        return [
            getBreadcrumbItem(__('app.repair_districts'), route('district.list')),
            getBreadcrumbItem($this->name, $this->route()),
        ];
    }
}
