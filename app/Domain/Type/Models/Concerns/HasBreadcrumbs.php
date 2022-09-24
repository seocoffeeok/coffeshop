<?php

namespace Domain\Type\Models\Concerns;

trait HasBreadcrumbs
{
    public function breadcrumbs(): array
    {
        return [
            getBreadcrumbItem($this->name, $this->route()),
        ];
    }
}
