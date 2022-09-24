<?php

namespace Domain\Malfunction\Models;

use Domain\Malfunction\Models\Concerns\HasMalfunction;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class MalfunctionPrice extends Model
{
    use HasMalfunction;
    use HasTranslations;

    protected $guarded = [];

    public array $translatable = [
        'name',
    ];
}
