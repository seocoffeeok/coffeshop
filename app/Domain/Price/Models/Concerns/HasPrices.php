<?php

namespace Domain\Price\Models\Concerns;

use Domain\Price\Models\PriceGroupPrice;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait HasPrices
{
    public function prices(): HasMany
    {
        return $this->hasMany(PriceGroupPrice::class);
    }
}
