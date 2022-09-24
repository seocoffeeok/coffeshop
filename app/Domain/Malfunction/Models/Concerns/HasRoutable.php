<?php

namespace Domain\Malfunction\Models\Concerns;

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
        return route('malfunctions.view', [
            'slug' => $this->slug,
        ]);
    }
}
