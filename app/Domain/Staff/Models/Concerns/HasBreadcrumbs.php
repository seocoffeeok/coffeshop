<?php

namespace Domain\Staff\Models\Concerns;

trait HasBreadcrumbs
{
    public function breadcrumbs(): array
    {
        return [
            getBreadcrumbItem(__('app.our_masters'), route('staff.list')),
            getBreadcrumbItem($this->name, $this->route()),
        ];
    }
}
