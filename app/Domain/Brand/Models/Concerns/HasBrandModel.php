<?php

namespace Domain\Brand\Models\Concerns;

use Domain\Brand\Models\BrandModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait HasBrandModel
{
    public function brandModel(): BelongsTo
    {
        return $this->belongsTo(BrandModel::class);
    }
}
