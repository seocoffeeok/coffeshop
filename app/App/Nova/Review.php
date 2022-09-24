<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Textarea;
use Melogail\LaravelReviews\Models\Review as DomainReview;

class Review extends Resource
{
    public static $model = DomainReview::class;

    public static $title = 'id';

    public static $group = 'Other';

    public static $search = [
        'id', 'name',
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),

            BelongsTo::make(__('Author'), 'reviewer', Reviewer::class)
                ->readonly(),

            Textarea::make(__('Message'), 'body')
                ->rules(['required']),

            Number::make(__('Rate'), 'rate')
                ->rules(['required', 'min:1', 'max:5', 'numeric']),

            Boolean::make(__('Approved'), 'approved')
                ->default(true),
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

    public static function authorizedToCreate(Request $request): bool
    {
        return false;
    }

}
