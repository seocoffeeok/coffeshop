<div class="feedback">
    <div class="feedback__container">
        <div class="feedback__wrapper">
            <span class="feedback__title">{!! __('app.technical_support_service_in_your_messengers') !!}</span>
            <p class="feedback__text">
                {!! __('app.technical_support_service_in_your_messengers_description') !!}
            </p>
            <div class="feedback__body">
                <div class="feedback__items">
                    <a href="{{ settings('telegram_url', '#') }}" class="feedback__icon _icon-telegram-2"></a>
                    <div class="feedback__messenger">Telegram</div>
                </div>

                <div class="feedback__items">
                    <a href="{{ settings('messenger_url', '#') }}" class="feedback__icon _icon-messenger-2"></a>
                    <div class="feedback__messenger">Facebook</div>
                </div>

                <div class="feedback__items">
                    <a href="{{ settings('viber_url', '#') }}" class="feedback__icon _icon-viber-2"></a>
                    <div class="feedback__messenger">Viber</div>
                </div>
            </div>
        </div>
    </div>
</div>
