<?php

namespace Domain\Price\Models;

use Domain\Price\Models\Concerns\HasPrices;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class PriceGroup extends Model
{
    use HasTranslations;
    use HasPrices;

    protected $with = [
        'prices',
    ];

    public array $translatable = [
        'name',
    ];
}
