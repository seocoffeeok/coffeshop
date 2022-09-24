<?php

namespace App\Http\Controllers\Client\ContactForm;

use App\Http\Controllers\Controller;
use Domain\ContactForm\Actions\ContactFormCreateAction;
use Domain\ContactForm\Requests\ContactFormCreateRequest;

class ContactFormCreateController extends Controller
{
    public function __invoke(ContactFormCreateRequest $request, ContactFormCreateAction $action)
    {
        $action->handle(
            $request->getData()
        );

        return redirect(
            url()->previous() . '#popup-feedback-sent'
        );
    }
}
