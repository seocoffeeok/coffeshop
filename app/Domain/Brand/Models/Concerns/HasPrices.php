<?php

namespace Domain\Brand\Models\Concerns;

use Domain\Brand\Models\BrandPrice;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait HasPrices
{
    public function prices(): HasMany
    {
        return $this->hasMany(BrandPrice::class);
    }
}
