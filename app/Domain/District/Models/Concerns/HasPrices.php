<?php

namespace Domain\District\Models\Concerns;

use Domain\District\Models\DistrictPrice;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait HasPrices
{
    public function prices(): HasMany
    {
        return $this->hasMany(DistrictPrice::class);
    }
}
