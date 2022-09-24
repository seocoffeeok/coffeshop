<?php

namespace Domain\Malfunction\Models\Concerns;

trait HasBreadcrumbs
{
    public function breadcrumbs(): array
    {
        return [
            getBreadcrumbItem(__('app.malfunctions'), route('malfunctions.list')),
            getBreadcrumbItem($this->name, $this->route()),
        ];
    }
}
