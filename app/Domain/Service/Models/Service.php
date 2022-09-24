<?php

namespace Domain\Service\Models;

use Domain\Service\Models\Concerns\HasBreadcrumbs;
use Domain\Service\Models\Concerns\HasMediaCollections;
use Domain\Service\Models\Concerns\HasRoutable;
use Domain\Service\Models\Concerns\HasPrices;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Translatable\HasTranslations;

class Service extends Model implements HasMedia
{
    use HasMediaCollections;
    use HasTranslations;
    use HasRoutable;
    use Searchable;
    use HasBreadcrumbs;
    use HasPrices;

    protected $with = [
        'prices',
    ];

    public array $translatable = [
        'name',
        'slug',
        'short_description',
        'description',
    ];
}
