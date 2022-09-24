<?php

namespace Domain\Service\Models\Concerns;

use Domain\Service\Models\ServicePrice;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait HasPrices
{
    public function prices(): HasMany
    {
        return $this->hasMany(ServicePrice::class);
    }
}
