<?php

namespace Domain\ContactForm\Actions;

use Domain\ContactForm\Data\ContactFormCreateData;
use Domain\ContactForm\Models\ContactForm;

class ContactFormCreateAction
{
    public function handle(ContactFormCreateData $data): ContactForm
    {
        /** @var ContactForm $contactForm */
        $contactForm = ContactForm::query()
            ->create($data->all());

        return $contactForm;
    }
}
