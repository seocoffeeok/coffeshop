<div class="map">
    <div class="map__container">
        <span class="map__title">{{ __('app.contacts_in_kiev') }}</span>
        <div id="map_container" class="map__wrapper">
            <x-client.common.google-maps/>

            {{--<div class="map__select">
                <select name="form[]" class="form">
                    <option value="1" selected>Пункт 1 - Вул. 23 Серпня 58</option>
                    <option value="2">Пункт 2 - Вул. 23 Серпня 58</option>
                    <option value="3">Пункт 3 - Вул. 23 Серпня 58</option>
                    <option value="4">Пункт 4 - Вул. 23 Серпня 58</option>
                </select>
            </div>--}}
        </div>

        <div class="map__row">
            <address class="map__items">
                <span class="map__icon _icon-location"></span>
                <div class="map__column">
                    <label class="map__label">{{ __('app.address') }}</label>
                    <p class="map__text">
                        {{ settings('address_' . app()->getLocale(), 'Киев, ул. Провиантська 3') }}
                    </p>
                </div>
            </address>
            <time class="map__items">
                <span class="map__icon _icon-time"></span>
                <div class="map__column">
                    <label class="map__label">{{ __('app.work_time') }}</label>
                    <p class="map__text">
                        {{ __('app.mon_fre') }}: {{ settings('work_mon_fri', '8:00 — 20:00') }}, <br> {{ __('app.sat') }}: {{ settings('work_sat', '10:00 — 18:00') }},
                        <br> {{ __('app.sun') }}: {{ ($workTime = settings('work_sun', 'day off')) === 'day off' ? __('app.day_off') : $workTime }}
                    </p>
                </div>
            </time>
            <div class="map__items">
                <span class="map__icon _icon-phone-1"></span>
                <div class="map__column">
                    <label class="map__label">{{ __('app.phone') }}</label>
                    <a href="tel:{{ settings('phone_other') }}" class="map__text">{{ settings('phone_other') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
