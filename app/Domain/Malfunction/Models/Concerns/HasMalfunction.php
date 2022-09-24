<?php

namespace Domain\Malfunction\Models\Concerns;

use Domain\Malfunction\Models\Malfunction;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait HasMalfunction
{
    public function malfunction(): BelongsTo
    {
        return $this->belongsTo(Malfunction::class);
    }
}
