<?php

namespace Domain\Repair\Models;

use Domain\Repair\Models\Concerns\HasRepair;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class RepairPrice extends Model
{
    use HasRepair;
    use HasTranslations;

    protected $guarded = [];

    public array $translatable = [
        'name',
    ];
}
