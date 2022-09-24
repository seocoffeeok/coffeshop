<div id="faq" class="answers">
    <div class="answers__container">
        <div class="answers__body">
            <div class="answers__content">
                <h3 class="answers__title-2">{{ __('app.the_most_common_questions') }}</h3>

                <x-client.faq.faq-list/>
            </div>
            <div class="answers__info">
                <div class="answers__image">
                    <picture>
                        <source srcset="{{ asset('img/main/Ivanov-Ivan.webp') }}" type="image/webp">
                        <img src="{{ asset('img/main/Ivanov-Ivan.jpg') }}" alt="{{ __('app.district_question_answer_alt') }}">
                    </picture>
                </div>
                <p class="answers__name">
                    {{ __('app.district_question_answer_master_name') }}
                </p>
                <p class="answers__info-text">
                    {!! __('app.district_question_answer_master_description') !!}
                </p>
            </div>
        </div>
    </div>
</div>
