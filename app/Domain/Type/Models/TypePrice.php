<?php

namespace Domain\Type\Models;

use Domain\Type\Models\Concerns\HasType;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class TypePrice extends Model
{
    use HasType;
    use HasTranslations;

    protected $guarded = [];

    public array $translatable = [
        'name',
    ];
}
