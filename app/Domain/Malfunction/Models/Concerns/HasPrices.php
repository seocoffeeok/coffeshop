<?php

namespace Domain\Malfunction\Models\Concerns;

use Domain\Malfunction\Models\MalfunctionPrice;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait HasPrices
{
    public function prices(): HasMany
    {
        return $this->hasMany(MalfunctionPrice::class);
    }
}
