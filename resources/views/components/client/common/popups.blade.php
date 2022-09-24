<div id="popup-feedback" aria-hidden="true" class="popup">
    <div class="popup__wrapper">
        <div class="popup__content">
            <div class="popup__row popup__row-1">
                <button data-close type="button" class="popup__close _icon-close"></button>
            </div>
            <form action="{{ route('contact-form.create') }}" method="post" class="popup__body body-popup body-popup-1">
                @csrf

                <div class="body-popup__icon _icon-phone-1"></div>
                <h4 class="body-popup__title-4">{{ __('app.feedback_we') }}</h4>
                <p class="body-popup__text">{!! __('app.feedback_we_description') !!}</p>

                <input class="body-popup__input" name="phone" type="tel" required placeholder="+38 (000) 000-00-00" value="{{ old('phone') }}">
                <input class="body-popup__input" name="name" required type="text" placeholder="Ім’я" value="{{ old('name') }}">

                <button type="submit"
                        class="body-popup__button btn">{{ __('app.send') }}</button>
            </form>
        </div>
    </div>
</div>

<div id="popup-feedback-sent" aria-hidden="true" class="popup">
    <div class="popup__wrapper">
        <div class="popup__content">
            <div class="popup__row popup__row-1">
                <button data-close type="button" class="popup__close _icon-close"></button>
            </div>
            <form action="" class="popup__body body-popup body-popup-1">
                <div class="body-popup__icon"><span class="_icon-check"></span></div>
                <h4 class="body-popup__title-4">
                    Дякуємо!
                </h4>

                <p class="body-popup__text">
                    Ваша заявка відправлена. Наш менеджер зателефонує Вам найближчим часом.
                </p>
                <button data-close type="button" class="body-popup__button btn">Зрозуміло</button>
            </form>
        </div>
    </div>
</div>
