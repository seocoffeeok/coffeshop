<?php

namespace App\View\Components\Client\Faq;

use Domain\QuestionAnswer\Models\QuestionAnswer;
use Illuminate\Support\Collection;
use Illuminate\View\Component;
use Illuminate\View\View;

class FaqList extends Component
{
    public Collection $questionAnswers;

    public function __construct()
    {
        $this->loadQuestionAnswers();
    }

    public function render(): View
    {
        return view('components.client.faq.faq-list');
    }

    private function loadQuestionAnswers(): void
    {
        $this->questionAnswers = QuestionAnswer::all();
    }
}
