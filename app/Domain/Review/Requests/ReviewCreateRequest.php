<?php

namespace Domain\Review\Requests;

use Domain\Review\Data\ReviewCreateData;
use Domain\Staff\Models\Staff;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Spatie\DataTransferObject\Exceptions\UnknownProperties;

class ReviewCreateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email',
            'rate' => 'required|integer|min:1|max:5',
            'body' => 'nullable',
            'model_type' => [
                'required',
                Rule::in([
                    Staff::class,
                ]),
            ],
            'model_id' => [
                'required',
                'integer',
                Rule::exists(
                    $this->getTableFormModel(), 'id'
                )
            ]
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'name' => $this->get('first_name') . ' ' . $this->get('last_name'),
        ]);
    }

    public function authorize(): bool
    {
        return true;
    }

    private function getTableFormModel(): string
    {
        return match ($this->get('model_type')) {
            Staff::class => 'staff',
        };
    }

    protected function getRedirectUrl(): string
    {
        return parent::getRedirectUrl() . '#popup-reviews';
    }

    /**
     * @throws UnknownProperties
     */
    public function getData(int $reviewerId): ReviewCreateData
    {
        return new ReviewCreateData([
            'name' => $this->get('name'),
            'email' => $this->get('email'),
            'rate' => $this->get('rate'),
            'body' => $this->get('body'),
            'model_type' => $this->get('model_type'),
            'model_id' => $this->get('model_id'),
            'reviewer_id' => $reviewerId,
        ]);
    }
}
