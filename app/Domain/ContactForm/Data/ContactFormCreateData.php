<?php

namespace Domain\ContactForm\Data;

use Spatie\DataTransferObject\DataTransferObject;

class ContactFormCreateData extends DataTransferObject
{
    public string $name;
    public string $phone;
}
