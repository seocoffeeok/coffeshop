<?php

namespace Domain\District\Models\Concerns;

use Domain\District\Models\District;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait HasDistrict
{
    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class);
    }
}
