<?php

namespace Domain\Price\Models;

use Domain\Price\Models\Concerns\HasPriceGroup;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class PriceGroupPrice extends Model
{
    use HasPriceGroup;
    use HasTranslations;

    protected $guarded = [];

    public array $translatable = [
        'name',
    ];

    protected $casts = [
        'is_optional' => 'boolean',
    ];
}
