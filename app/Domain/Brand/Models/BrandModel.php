<?php

namespace Domain\Brand\Models;

use Domain\Brand\Models\Concerns\HasBrand;
use Domain\Brand\Models\Concerns\HasBrandModelBreadcrumbs;
use Domain\Brand\Models\Concerns\HasBrandModelMediaCollections;
use Domain\Brand\Models\Concerns\HasBrandModelPrices;
use Domain\Brand\Models\Concerns\HasBrandModelRoutable;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Translatable\HasTranslations;

class BrandModel extends Model implements HasMedia
{
    use HasTranslations;
    use HasBrand;
    use HasBrandModelPrices;
    use HasBrandModelRoutable;
    use HasBrandModelBreadcrumbs;
    use HasBrandModelMediaCollections;

    public array $translatable = [
        'name',
        'slug',
        'short_description',
        'description',
    ];

    protected $guarded = [];
}
