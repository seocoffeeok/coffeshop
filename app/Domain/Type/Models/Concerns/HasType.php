<?php

namespace Domain\Type\Models\Concerns;

use Domain\Type\Models\Type;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait HasType
{
    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }
}
