<?php

namespace App\Nova;

use App\Nova\Traits\HasCommonMediaField;
use Drobee\NovaSluggable\Slug;
use Drobee\NovaSluggable\SluggableText;
use Emilianotisato\NovaTinyMCE\NovaTinyMCE;
use Illuminate\Http\Request;
use Kongulov\NovaTabTranslatable\NovaTabTranslatable;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Domain\Type\Models\Type as DomainType;

class Type extends Resource
{
    use HasCommonMediaField;

    public static $model = DomainType::class;

    public static $title = 'name';

    public static $group = 'Types';

    public static $search = [
        'id',
        'name->uk',
        'name->ru',
        'slug->uk',
        'slug->en',
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
                    ->updateRules(['unique:brands,slug,{{resourceId}}']),

                NovaTinyMCE::make(__('Short description'), 'short_description'),

                NovaTinyMCE::make(__('Description'), 'description'),
            ]),

            $this->getImageMediaField(),

            HasMany::make(__('Prices'), 'prices', TypePrice::class)
                ->onlyOnDetail(),
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
