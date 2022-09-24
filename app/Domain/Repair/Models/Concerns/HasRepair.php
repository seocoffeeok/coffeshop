<?php

namespace Domain\Repair\Models\Concerns;

use Domain\Repair\Models\Repair;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait HasRepair
{
    public function repair(): BelongsTo
    {
        return $this->belongsTo(Repair::class);
    }
}
