<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Kongulov\NovaTabTranslatable\NovaTabTranslatable;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Domain\Price\Models\PriceGroup as DomainPriceGroup;
use Laravel\Nova\Fields\Text;

class PriceGroup extends Resource
{
    public static $model = DomainPriceGroup::class;

    public static $title = 'name';

    public static $group = 'Prices';

    public static $search = [
        'id',
        'name->uk',
        'name->ru',
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),

            NovaTabTranslatable::make([
                Text::make(__('Name'), 'name')
                    ->rules(['required']),
            ]),

            HasMany::make(__('Prices'), 'prices', PriceGroupPrice::class),
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
