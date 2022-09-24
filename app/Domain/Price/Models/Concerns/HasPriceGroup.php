<?php

namespace Domain\Price\Models\Concerns;

use Domain\Price\Models\PriceGroup;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait HasPriceGroup
{
    public function priceGroup(): BelongsTo
    {
        return $this->belongsTo(PriceGroup::class);
    }
}
