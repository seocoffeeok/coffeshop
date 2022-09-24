@props(['modelType', 'modelId'])

<div id="popup-reviews" aria-hidden="true" class="popup">
    <div class="popup__wrapper">
        <div class="popup__content">
            <div class="popup__row">
                <h2 class="content__title-2">{{ __('app.leave_review') }}</h2>

                <button data-close type="button" class="popup__close _icon-close"></button>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('reviews.create') }}" method="POST" class="popup__body body-popup">
                @csrf

                <input type="hidden" name="model_type" value="{{ $modelType }}">
                <input type="hidden" name="model_id" value="{{ $modelId }}">

                <div class="body-popup__header">
                    <h4 class="body-popup__title-4">{{ __('app.overall_rating') }}</h4>

                    <div class="body-popup__rating rating">
                        <div class="rating__items">
                            <input id="rating-5" type="radio" class="rating__item" value="5" name="rate" checked>
                            <label for="rating-5" class="rating__label"></label>
                            <input id="rating-4" type="radio" class="rating__item" value="4" name="rate">
                            <label for="rating-4" class="rating__label"></label>
                            <input id="rating-3" type="radio" class="rating__item" value="3" name="rate">
                            <label for="rating-3" class="rating__label"></label>
                            <input id="rating-2" type="radio" class="rating__item" value="2" name="rate">
                            <label for="rating-2" class="rating__label"></label>
                            <input id="rating-1" type="radio" class="rating__item" value="1" name="rate">
                            <label for="rating-1" class="rating__label"></label>
                        </div>
                    </div>
                </div>

                <div class="body-popup__row">
                    <input class="body-popup__input" name="first_name" required type="text" placeholder="{{ __('app.first_name') }}" value="{{ old('first_name') }}">
                    <input class="body-popup__input" name="last_name" required type="text" placeholder="{{ __('app.last_name') }}" value="{{ old('last_name') }}">
                </div>

                <div class="body-popup__row">
                    <input class="body-popup__input" name="email" required type="email" placeholder="mail@example.com" style="flex: auto;" value="{{ old('email') }}">
                </div>

                <textarea class="body-popup__input-text" name="body" placeholder="{{ __('app.your_review') }}">{!! old('body') !!}</textarea>

                <button type="submit" class="body-popup__button btn">{{ __('app.send') }}</button>

                <p class="body-popup__text">{!! __('app.review_policy_text', ['policy' => route('page.view', 'privacy-policy'), 'user-agreement' => route('page.view', 'user-agreement')]) !!}</p>
            </form>
        </div>
    </div>
</div>
