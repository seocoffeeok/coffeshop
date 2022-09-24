<?php

namespace Domain\Repair\Models\Concerns;

trait HasBreadcrumbs
{
    public function breadcrumbs(): array
    {
        return [
            getBreadcrumbItem($this->name, $this->route()),
        ];
    }
}
