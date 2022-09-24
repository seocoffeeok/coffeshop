<?php

namespace Domain\Brand\Models\Concerns;

use Domain\Brand\Models\BrandModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait HasModels
{
    public function models(): HasMany
    {
        return $this->hasMany(BrandModel::class);
    }
}
