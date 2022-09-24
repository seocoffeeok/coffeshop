<?php

namespace Domain\ContactForm\Requests;

use Domain\ContactForm\Data\ContactFormCreateData;
use Illuminate\Foundation\Http\FormRequest;
use Spatie\DataTransferObject\Exceptions\UnknownProperties;

class ContactFormCreateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'phone' => 'required|string',
        ];
    }

    /**
     * @throws UnknownProperties
     */
    public function getData(): ContactFormCreateData
    {
        return new ContactFormCreateData([
            'name' => $this->get('name'),
            'phone' => $this->get('phone'),
        ]);
    }

    public function authorize(): bool
    {
        return true;
    }
}
