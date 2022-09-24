<?php

namespace Domain\District\Models;

use Domain\District\Models\Concerns\HasDistrict;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class DistrictPrice extends Model
{
    use HasDistrict;
    use HasTranslations;

    protected $guarded = [];

    public array $translatable = [
        'name',
    ];
}
