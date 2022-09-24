<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Kongulov\NovaTabTranslatable\NovaTabTranslatable;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Domain\Service\Models\ServicePrice as DomainServicePrice;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;

class ServicePrice extends Resource
{
    public static $model = DomainServicePrice::class;

    public static $title = 'name';

    public static $group = 'Services';

    public static $search = [
        'id',
        'name->ru',
        'name->uk',
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make(__('ID'), 'id')
                ->sortable(),

            NovaTabTranslatable::make([
                Text::make(__('Name'), 'name')
                    ->rules(['required']),
            ]),

            Number::make(__('Price'), 'price')
                ->rules(['required', 'min:1', 'max:29999']),

            BelongsTo::make(__('Service'), 'service', Service::class)
                ->rules(['required']),
        ];
    }

    public function cards(Request $request): array
    {
        return [];
    }

    public function filters(Request $request): array
    {
        return [];
    }

    public function lenses(Request $request): array
    {
        return [];
    }

    public function actions(Request $request): array
    {
        return [];
    }
}
