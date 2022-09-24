<div>
    @foreach($questionAnswers as $questionAnswer)
        <x-client.faq.item :question-answer="$questionAnswer"/>
    @endforeach
</div>
