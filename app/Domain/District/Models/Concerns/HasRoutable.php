<?php

namespace Domain\District\Models\Concerns;

trait HasRoutable
{
    public function route(string $name = 'view'): string
    {
        return match ($name) {
            'view' => $this->getViewRoute(),
        };
    }

    private function getViewRoute(): string
    {
        return route('district.view', [
            'slug' => $this->slug,
        ]);
    }
}
