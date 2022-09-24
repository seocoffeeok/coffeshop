<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Kongulov\NovaTabTranslatable\NovaTabTranslatable;
use Laravel\Nova\Fields\ID;
use Domain\QuestionAnswer\Models\QuestionAnswer as DomainQuestionAnswer;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;

class QuestionAnswer extends Resource
{
    public static $model = DomainQuestionAnswer::class;

    public static $title = 'question';

    public static $group = 'Other';

    public static $search = [
        'id',
        'question->uk',
        'question->ru',
        'answer->uk',
        'answer->ru',
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),

            NovaTabTranslatable::make([
                Text::make(__('Question'), 'question')
                    ->rules(['required']),

                Textarea::make(__('Answer'), 'answer')
                    ->rules(['required']),
            ]),
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
