<?php

namespace App\Nova;

use App\Nova\Traits\HasPageMediaField;
use Domain\Page\Models\Page as DomainPage;
use Emilianotisato\NovaTinyMCE\NovaTinyMCE;
use Illuminate\Http\Request;
use Kongulov\NovaTabTranslatable\NovaTabTranslatable;
use Kongulov\NovaTabTranslatable\TranslatableTabToRowTrait;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;

class Page extends Resource
{
    use TranslatableTabToRowTrait;
    use HasPageMediaField;

    public static $model = DomainPage::class;

    public static $title = 'id';

    public static $group = 'Other';

    public static $search = [
        'id',
        'meta_title->uk',
        'meta_title->ru',
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),

            Text::make('Slug')
                ->rules(['required', 'string', 'max:100', 'regex:/^([a-z0-9\-]+)$/'])
                ->creationRules('unique:pages')
                ->updateRules('unique:pages,slug,{{resourceId}}'),

            NovaTabTranslatable::make([
                Text::make(__('Meta title'), 'meta_title')
                    ->required()
                    ->asHtml(),

                Text::make(__('Meta description'), 'meta_description')
                    ->required()
                    ->hideFromIndex()
                    ->asHtml(),

                NovaTinyMCE::make('body'),

                NovaTinyMCE::make(__('Short body'), 'short_body')
                    ->showOnIndex(false)
                    ->showOnCreating(false)
                    ->showOnDetail($this->isViewShortBodyField())
                    ->showOnUpdating($this->isViewShortBodyField()),
            ]),

            $this->getSnippetPreviewMediaField(),
            $this->getGalleyMediaField(),
            $this->getCertificatesMediaField(),
        ];
    }

    private function isViewShortBodyField(): bool
    {
        return $this->resource->slug === 'price';
    }
}
