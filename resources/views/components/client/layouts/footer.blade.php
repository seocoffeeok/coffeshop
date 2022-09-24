<footer class="footer">
    <div class="footer__container">
        <div class="footer__body">
            <div class="footer__main">
                <div class="footer__column">
                    <nav class="menu-footer">
                        <p class="menu-footer__title footer__title">{{ __('app.navigation') }}</p>
                        <ul class="menu-footer__list">
                            <li class="menu-footer__item">
                                <a href="{{ route('prices') }}" class="menu-footer__link">{{ __('app.prices') }}</a>
                            </li>
                            <li class="menu-footer__item">
                                <a href="{{ route('about') }}" class="menu-footer__link">{{ __('app.about_company') }}</a>
                            </li>
                            <li class="menu-footer__item">
                                <a href="{{ route('contacts') }}" class="menu-footer__link">{{ __('app.contacts') }}</a>
                            </li>
                            <li class="menu-footer__item">
                                <a href="{{ route('malfunctions.list') }}" class="menu-footer__link">{{ __('app.problems') }}</a>
                            </li>
                            <li class="menu-footer__item">
                                <a href="{{ route('district.list') }}" class="menu-footer__link">{{ __('app.districts') }}</a>
                            </li>
                            <li class="menu-footer__item">
                                <a href="{{ route('staff.list') }}" class="menu-footer__link">{{ __('app.our_masters') }}</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="footer__column">
                    <div data-spollers="767.98,max" class="footer__spollers spollers-footer">
                        <div class="spollers-footer__item">
                            <button type="button" data-spoller class="spollers-footer__title footer__title">
                                {{ __('app.services_in_the_districts') }}
                                <span class="_icon-arrow"></span>
                            </button>

                            <x-client.districts.footer-list/>
                        </div>
                    </div>
                </div>
                <div class="footer__column">
                    <div data-spollers="767.98,max" class="footer__spollers spollers-footer">
                        <div class="spollers-footer__item">
                            <button type="button" data-spoller class="spollers-footer__title footer__title">
                                {{ __('app.information') }}
                                <span class="_icon-arrow"></span>
                            </button>

                            <div class="spollers-footer__body">
                                <nav class="menu-footer">
                                    <ul class="menu-footer__list menu-footer__list-spollers">
                                        <li class="menu-footer__item">
                                            <a href="{{ url('sitemap.xml') }}" class="menu-footer__link">{{ __('app.sitemap') }}</a>
                                        </li>
                                        <li class="menu-footer__item">
                                            <a href="{{ route('page.view', 'privacy-policy') }}" class="menu-footer__link">{{ __('app.privacy_policy') }}</a>
                                        </li>
                                        <li class="menu-footer__item">
                                            <a href="{{ route('page.view', 'user-agreement') }}" class="menu-footer__link">{{ __('app.user_agreement') }}</a>
                                        </li>
                                        <li class="menu-footer__item">
                                            <a href="{{ route('page.view', 'cookies-policy') }}" class="menu-footer__link">{{ __('app.cookies_policy') }}</a>
                                        </li>
                                        <li class="menu-footer__item">
                                            <a href="{{ route('page.view', 'delivery-and-payments') }}" class="menu-footer__link">{{ __('app.delivery_and_payments_terms') }}</a>
                                        </li>
                                        <li class="menu-footer__item">
                                            <a href="{{ route('page.view', 'return-and-exchange') }}" class="menu-footer__link">{{ __('app.return_and_exchange_terms') }}</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-da=".footer__main,767.98,0" class="footer__column">
                    <p class="footer__title">{{ __('app.contacts') }}</p>
                    <div class="footer__row">
                        <time class="footer__schedule">{{ __('app.mon_fre') }}: <span>{{ settings('work_mon_fri', '8:00 — 20:00') }}</span></time>
                        <time class="footer__schedule">{{ __('app.sat') }}: <span>{{ settings('work_sat', '10:00 — 18:00') }}</span></time>
                        <time class="footer__schedule">{{ __('app.sun') }}: <span>{{ ($workTime = settings('work_sun', 'day off')) === 'day off' ? __('app.day_off') : $workTime }}</span></time>
                    </div>
                    <ul data-da=".footer__main,767.98,4" class="footer__contacts">
                        <li>
                            <a href="tel:{{ settings('phone_lifecell', '+380999999999') }}" class="top-header__phone top-header__lifecell">{{ settings('phone_lifecell', '+380999999999') }}</a>
                        </li>
                        <li>
                            <a href="tel:{{ settings('phone_vodafone', '+380999999999') }}" class="top-header__phone top-header__vodafone">{{ settings('phone_vodafone', '+380999999999') }}</a>
                        </li>
                        <li>
                            <a href="tel:{{ settings('phone_kyivstar', '+380999999999') }}" class="top-header__phone top-header__kyivstar">{{ settings('phone_kyivstar', '+380999999999') }}</a>
                        </li>
                        <li>
                            <a href="tel:{{ settings('phone_other', '+380999999999') }}" class="top-header__phone top-header__landline _icon-phone-2">{{ settings('phone_other', '+380999999999') }}</a>
                        </li>
                    </ul>
                    <div class="footer__location">
                        <div class="footer__metro">
                            <span>М</span>
                            {{ settings('metro_' . app()->getLocale(), 'Політехнічний Інститут') }}
                        </div>
                        <address class="footer__address">
                            {{ settings('address_' . app()->getLocale(), 'Киев, ул. Провиантська 3') }}
                            <a href="{{ settings('address_google_maps_url', '#') }}" class="footer__map">{{ __('app.open_in_google_maps') }}</a>
                        </address>
                    </div>
                </div>
            </div>

            <div class="footer__bottom">
                <div class="footer__copyright">
                    <span>© 2019 {{ config('app.name') }}</span>
                    <p class="footer__support">
                        {{ __('app.general_questions') }}: <a href="mailto:{{ settings('email', 'icoffeeok@gmail.com') }}">{{ settings('email', 'icoffeeok@gmail.com') }}</a>
                    </p>
                </div>
                <div class="footer__payment">
                    <div class="footer__payment-logo">
                        <img src="{{ asset('img/icon/visa.svg') }}" alt="Visa" title="Visa" class="footer__payment_visa">
                    </div>
                    <div class="footer__payment-logo">
                        <img src="{{ asset('img/icon/mastercard.svg') }}" alt="Mastercard" title="Mastercard">
                    </div>
                </div>
                <div class="footer__social">
                    <a href="{{ settings('telegram_url', '#') }}" class="footer__item telegram">Telegram</a>
                    <a href="{{ settings('messenger_url', '#') }}"  class="footer__item messenger">Messenger</a>
                    <a href="{{ settings('viber_url', '#') }}" class="footer__item viber">Viber</a>
                </div>
            </div>
        </div>
    </div>
</footer>
