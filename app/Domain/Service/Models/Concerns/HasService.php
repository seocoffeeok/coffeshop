<?php

namespace Domain\Service\Models\Concerns;

use Domain\Service\Models\Service;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait HasService
{
    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }
}
