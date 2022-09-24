<?php

namespace App\Providers;

use Domain\Brand\Models\Brand;
use Domain\Repair\Models\Repair;
use Domain\Service\Models\Service;
use Domain\Type\Models\Type;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View as ViewInstance;

class ViewServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        View::composer('*', function (ViewInstance $view): void {
            $view->with('authUser', auth()->user());
            $view->with('brandsChunks', $this->getBrands());
            $view->with('typesCoffeeMachinesChunks', $this->getTypesCoffeeMachines());
            $view->with('repairTypesChunks', $this->getRepairTypes());
            $view->with('servicesChunks', $this->getServicesChunks());
        });
    }

    public function boot(): void
    {
        //
    }

    private function getBrands(): Collection
    {
        return Brand::all()->chunk(6);
    }

    private function getTypesCoffeeMachines(): Collection
    {
        return Type::all()->chunk(6);
    }

    private function getRepairTypes(): Collection
    {
        return Repair::all()->chunk(6);
    }

    private function getServicesChunks(): Collection
    {
        return Service::all()->chunk(6);
    }
}
