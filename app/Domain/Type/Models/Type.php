<?php

namespace Domain\Type\Models;

use Domain\Type\Models\Concerns\HasBreadcrumbs;
use Domain\Type\Models\Concerns\HasMediaCollections;
use Domain\Type\Models\Concerns\HasRoutable;
use Domain\Type\Models\Concerns\HasPrices;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Translatable\HasTranslations;

class Type extends Model implements HasMedia
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
