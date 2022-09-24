<?php

namespace Domain\Service\Models;

use Domain\Service\Models\Concerns\HasService;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ServicePrice extends Model
{
    use HasService;
    use HasTranslations;

    protected $guarded = [];

    public array $translatable = [
        'name',
    ];
}
