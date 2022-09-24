<?php

namespace Domain\Brand\Models\Concerns;

use Domain\Brand\Models\BrandModelPrice;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait HasBrandModelPrices
{
    public function prices(): HasMany
    {
        return $this->hasMany(BrandModelPrice::class);
    }
}
