<?php

namespace Domain\Brand\Models;

use Domain\Brand\Models\Concerns\HasBreadcrumbs;
use Domain\Brand\Models\Concerns\HasMediaCollections;
use Domain\Brand\Models\Concerns\HasModels;
use Domain\Brand\Models\Concerns\HasRoutable;
use Domain\Brand\Models\Concerns\HasPrices;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Translatable\HasTranslations;

class Brand extends Model implements HasMedia
{
    use HasMediaCollections;
    use HasTranslations;
    use HasRoutable;
    use Searchable;
    use HasBreadcrumbs;
    use HasPrices;
    use HasModels;

    protected $with = [
        'prices',
        'models'
    ];

    public array $translatable = [
        'name',
        'slug',
        'short_description',
        'description',
    ];
}
