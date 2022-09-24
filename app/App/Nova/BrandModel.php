<?php

namespace App\Nova;

use App\Nova\Traits\HasBrandModelMediaField;
use Drobee\NovaSluggable\Slug;
use Drobee\NovaSluggable\SluggableText;
use Emilianotisato\NovaTinyMCE\NovaTinyMCE;
use Illuminate\Http\Request;
use Kongulov\NovaTabTranslatable\NovaTabTranslatable;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Domain\Brand\Models\BrandModel as DomainBrandModel;

class BrandModel extends Resource
{
    use HasBrandModelMediaField;

    public static $model = DomainBrandModel::class;

    public static $title = 'name';

    public static $group = 'Brands';

    public static $search = [
        'id',
        'name->ru',
        'name->uk',
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),

            NovaTabTranslatable::make([
                SluggableText::make(__('Name'), 'name')
                    ->slug()
                    ->rules('required'),

                Slug::make(__('Slug'), 'slug')
                    ->rules('required', 'string', 'max:100', 'regex:/^([a-z0-9\-]+)$/')
                    ->creationRules(['unique:districts,slug'])
                    ->updateRules(['unique:brand_models,slug,{{resourceId}}']),

                NovaTinyMCE::make(__('Short description'), 'short_description'),

                NovaTinyMCE::make(__('Description'), 'description'),
            ]),

            HasMany::make(__('Prices'), 'prices', BrandModelPrice::class),

            BelongsTo::make(__('Brand'), 'brand', Brand::class),

            $this->getImageMediaField(),
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
