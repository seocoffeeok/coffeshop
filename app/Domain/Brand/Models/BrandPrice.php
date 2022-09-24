<?php

namespace Domain\Brand\Models;

use Domain\Brand\Models\Concerns\HasBrand;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class BrandPrice extends Model
{
    use HasBrand;
    use HasTranslations;

    protected $guarded = [];

    public array $translatable = [
        'name',
    ];
}
