<?php

namespace Domain\District\Models;

use Domain\District\Models\Concerns\HasBreadcrumbs;
use Domain\District\Models\Concerns\HasPrices;
use Domain\District\Models\Concerns\HasRoutable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Spatie\Translatable\HasTranslations;

class District extends Model
{
    use HasTranslations;
    use HasRoutable;
    use HasBreadcrumbs;
    use HasPrices;
    use Searchable;

    protected $with = [
        'prices',
    ];

    public array $translatable = [
        'name',
        'slug',
        'declination',
        'short_description',
        'description',
    ];

    protected $guarded = [];
}
