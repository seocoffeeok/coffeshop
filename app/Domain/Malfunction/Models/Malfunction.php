<?php

namespace Domain\Malfunction\Models;

use Domain\Malfunction\Models\Concerns\HasBreadcrumbs;
use Domain\Malfunction\Models\Concerns\HasMediaCollections;
use Domain\Malfunction\Models\Concerns\HasPrices;
use Domain\Malfunction\Models\Concerns\HasRoutable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Translatable\HasTranslations;

class Malfunction extends Model implements HasMedia
{
    use HasTranslations;
    use HasRoutable;
    use HasBreadcrumbs;
    use HasPrices;
    use Searchable;
    use HasMediaCollections;

    protected $with = [
        'prices',
    ];

    public array $translatable = [
        'name',
        'slug',
        'short_description',
        'description',
    ];

    protected $guarded = [];
}
