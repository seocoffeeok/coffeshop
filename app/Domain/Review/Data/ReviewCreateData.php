<?php

namespace Domain\Review\Data;

use Spatie\DataTransferObject\DataTransferObject;

class ReviewCreateData extends DataTransferObject
{
    public string $name;
    public string $email;
    public int $rate;
    public ?string $body;
    public string $model_type;
    public int $model_id;
    public int $reviewer_id;
}
