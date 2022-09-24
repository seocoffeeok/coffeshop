<?php

namespace App\Nova;

use App\Nova\Actions\ContactFormResolveAction;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Domain\ContactForm\Models\ContactForm as DomainContactForm;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Pdmfc\NovaFields\ActionButton;

class ContactForm extends Resource
{
    public static $model = DomainContactForm::class;

    public static $title = 'phone';

    public static $group = 'Users';

    public static $search = [
        'phone',
        'name',
    ];

    public static array $indexDefaultOrder = [
        'is_resolved' => 'asc',
    ];

    public static function indexQuery(NovaRequest $request, $query): Builder
    {
        if (empty($request->get('orderBy'))) {
            $query->getQuery()->orders = [];

            return $query->orderBy(
                key(static::$indexDefaultOrder),
                reset(static::$indexDefaultOrder),
            );
        }

        return $query;
    }

    public function fields(Request $request): array
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),

            Text::make(__('Name'), 'name'),

            Text::make(__('Phone'), 'phone'),

            Boolean::make(__('Is resolved'), 'is_resolved')
                ->default(false),

            ActionButton::make('Action')
                ->hideWhenUpdating()
                ->action(ContactFormResolveAction::class, $this->resource->id)
                ->readonly(function () {
                    return $this->resource->is_resolved === true;
                })
                ->text('Mark as resolved'),
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
        return [
            new ContactFormResolveAction(),
        ];
    }

    public static function authorizedToCreate(Request $request): bool
    {
        return false;
    }

    public function authorizedToDelete(Request $request): bool
    {
        return false;
    }
}
