<?php

namespace Domain\Type\Models\Concerns;

use Domain\Type\Models\TypePrice;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait HasPrices
{
    public function prices(): HasMany
    {
        return $this->hasMany(TypePrice::class);
    }
}
