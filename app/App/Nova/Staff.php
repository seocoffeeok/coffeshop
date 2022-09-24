<?php

namespace App\Nova;

use App\Nova\Traits\HasStaffMediaField;
use Drobee\NovaSluggable\SluggableText;
use Illuminate\Http\Request;
use Kongulov\NovaTabTranslatable\NovaTabTranslatable;
use Laravel\Nova\Fields\ID;
use Domain\Staff\Models\Staff as DomainStaff;
use Drobee\NovaSluggable\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;

class Staff extends Resource
{
    use HasStaffMediaField;

    public static $model = DomainStaff::class;

    public static $title = 'id';

    public static $group = 'Other';

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
                    ->rules(['required', 'string', 'max:100'])
                    ->creationRules(['unique:staff,slug'])
                    ->updateRules(['unique:staff,slug,{{resourceId}}']),

                Text::make(__('Regalia'), 'regalia')
                    ->rules('required'),

                Textarea::make(__('Description'), 'description')
                    ->hideFromIndex(),

                Textarea::make(__('Merit'), 'merit')
                    ->hideFromIndex(),
            ]),

            $this->getAvatarMediaField(),

            $this->getCertificatesMediaField(),
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
