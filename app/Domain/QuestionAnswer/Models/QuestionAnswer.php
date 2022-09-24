<?php

namespace Domain\QuestionAnswer\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class QuestionAnswer extends Model
{
    use HasTranslations;

    protected $guarded = [];

    public array $translatable = [
        'question',
        'answer',
    ];
}
