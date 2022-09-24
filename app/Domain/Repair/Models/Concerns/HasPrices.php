<?php

namespace Domain\Repair\Models\Concerns;

use Domain\Repair\Models\RepairPrice;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait HasPrices
{
    public function prices(): HasMany
    {
        return $this->hasMany(RepairPrice::class);
    }
}
