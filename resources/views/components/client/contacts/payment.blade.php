<div class="payment">
    <div class="payment__container">
        <div class="payment__body">
            <div class="payment__content">
                <h3 class="payment__title">{{ __('app.requisites') }}</h3>
                <p class="payment__text">{{ settings('payment_company_name_' . app()->getLocale()) }}</p>
                <ul class="payment__list">
                    @if($inn = settings('app.payment_company_inn'))
                        <li>
                            <p>{{ __('app.inn') }} {{ $inn }}</p>
                        </li>
                    @endif

                    @if($kpp = settings('payment_company_kpp'))
                        <li>
                            <p>{{ __('app.kpp') }} {{ $kpp }}</p>
                        </li>
                    @endif

                    @if($kpp = settings('payment_company_ogrn'))
                        <li>
                            <p>{{ __('app.ogrn') }} {{ $kpp }}</p>
                        </li>
                    @endif
                </ul>

                <address class="map__items">
                    <span class="map__icon _icon-location"></span>
                    <div class="map__column">
                        <label class="map__label">{{ __('app.correspondent_address') }}</label>
                        <p class="map__text">
                            {{ settings('payment_company_correspondent') }}
                        </p>
                    </div>
                </address>

                <address class="map__items">
                    <span class="map__icon _icon-location"></span>
                    <div class="map__column">
                        <label class="map__label">{{ __('app.legal_address') }}</label>
                        <p class="map__text">
                            {{ settings('payment_company_legal') }}
                        </p>
                    </div>
                </address>
            </div>
            <div class="payment__image">
                <x-client.contacts.legal-google-maps/>
            </div>
        </div>
    </div>
</div>
