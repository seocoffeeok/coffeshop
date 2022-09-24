<?php

namespace App\Http\Controllers\Client\Service;

use App\Http\Controllers\Controller;
use Domain\Service\Models\Service;
use Domain\Type\Models\Type;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ServiceViewController extends Controller
{
    public function __invoke(Request $request): View
    {
        return view('client.service.view', [
            'service' => $this->findService(
                $request->route('slug'),
            ),
        ]);
    }

    private function findService(string $slug): Service
    {
        /** @var Service $district */
        $district = Service::query()
            ->whereLocalized('slug', $slug)
            ->firstOrFail();

        return $district;
    }
}
