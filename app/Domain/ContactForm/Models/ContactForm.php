<?php

namespace Domain\ContactForm\Models;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    protected $guarded = [];

    protected $casts = [
        'is_resolved',
    ];
}
