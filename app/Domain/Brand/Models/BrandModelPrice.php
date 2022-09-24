<?php

namespace Domain\Brand\Models;

use Domain\Brand\Models\Concerns\HasBrandModel;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class BrandModelPrice extends Model
{
    use HasBrandModel;
    use HasTranslations;

    protected $guarded = [];

    public array $translatable = [
        'name',
    ];
}
