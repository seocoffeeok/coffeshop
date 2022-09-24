<?php

namespace Domain\Service\Models\Concerns;

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
        return route('service.view', [
            'slug' => $this->slug,
        ]);
    }
}
