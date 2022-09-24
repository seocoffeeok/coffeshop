<?php

namespace Domain\Repair\Models;

use Domain\Repair\Models\Concerns\HasBreadcrumbs;
use Domain\Repair\Models\Concerns\HasMediaCollections;
use Domain\Repair\Models\Concerns\HasRoutable;
use Domain\Repair\Models\Concerns\HasPrices;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Translatable\HasTranslations;

class Repair extends Model implements HasMedia
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
