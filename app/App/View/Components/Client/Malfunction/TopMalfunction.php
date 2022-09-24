<?php

namespace App\View\Components\Client\Malfunction;

use Domain\Malfunction\Models\Malfunction;
use Illuminate\Support\Collection;
use Illuminate\View\Component;
use Illuminate\View\View;

class TopMalfunction extends Component
{
    public Collection $malfunctions;

    public function __construct()
    {
        $this->loadMalfunctions();
    }

    public function render(): View
    {
        return view('components.client.malfunction.top-malfunction');
    }

    private function loadMalfunctions(): void
    {
        $this->malfunctions = Malfunction::query()
            ->take(7)
            ->get();
    }
}
