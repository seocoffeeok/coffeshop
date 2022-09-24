<?php

namespace Domain\Brand\Models\Concerns;

use Domain\Brand\Models\Brand;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait HasBrand
{
    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }
}
