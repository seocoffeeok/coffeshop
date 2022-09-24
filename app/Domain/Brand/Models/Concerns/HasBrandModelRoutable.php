<?php

namespace Domain\Brand\Models\Concerns;

trait HasBrandModelRoutable
{
    public function route(string $name = 'view'): string
    {
        return match ($name) {
            'view' => $this->getViewRoute(),
        };
    }

    private function getViewRoute(): string
    {
        return route('brands.model.view', [
            'model' => $this->brand->slug,
            'slug' => $this->slug,
        ]);
    }
}
