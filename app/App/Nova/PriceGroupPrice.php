<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Kongulov\NovaTabTranslatable\NovaTabTranslatable;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Domain\Price\Models\PriceGroupPrice as DomainPriceGroupPrice;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;

class PriceGroupPrice extends Resource
{
    public static $model = DomainPriceGroupPrice::class;

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

            Number::make(__('Price'), 'price')
                ->rules(['required']),

            BelongsTo::make(__('Price Group'), 'priceGroup', PriceGroup::class)
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
