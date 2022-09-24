<header class="header">
    <div data-da=".menu-catalog,1140,1" class="header__top top-header">
        <div class="top-header__container">
            <div class="top-header__info">
                <a href="mailto:{{ settings('email') }}" class="top-header__item _icon-sms">{{ settings('email') }}</a>

                <div data-spollers="767.98,min" data-da=".body-header__items,1140,2" class="top-header__items">
                    <div class="top-header__wrapper">
                        <a href="tel:{{ settings('phone_lifecell') }}" class="top-header__item top-header__phone _icon-phone-1">
                            <span>{{ settings('phone_lifecell') }}</span>
                        </a>
                        <button type="button" data-spoller data-spoller-close
                                class="top-header__arrow _icon-arrow"></button>
                        <ul class="top-header__list">
                            <div class="top-header__title">
                                {{ __('app.contacts') }}
                            </div>
                            <li>
                                <a href="tel:{{ settings('phone_lifecell') }}" class="top-header__phone top-header__lifecell">
                                    {{ settings('phone_lifecell') }}
                                </a>
                            </li>
                            <li>
                                <a href="tel:{{ settings('phone_vodafone') }}" class="top-header__phone top-header__vodafone">
                                    {{ settings('phone_vodafone') }}
                                </a>
                            </li>
                            <li>
                                <a href="tel:{{ settings('phone_kyivstar') }}" class="top-header__phone top-header__kyivstar">
                                    {{ settings('phone_kyivstar') }}
                                </a>
                            </li>
                            <li>
                                <a href="tel:{{ settings('phone_other') }}" class="top-header__phone top-header__landline _icon-phone-2">
                                    {{ settings('phone_other') }}
                                </a>
                            </li>

                            <div class="top-header__contacts">
                                <div class="top-header__info">
                                    <a href="mailto:{{ settings('email') }}"
                                       class="top-header__item _icon-sms">{{ settings('email') }}</a>

                                    <address>
                                        <a href="{{ route('contacts') }}" class="top-header__item _icon-location">
                                            <span>{{ settings('address_' . app()->getLocale()) }}</span>
                                        </a>
                                    </address>

                                    <time class="top-header__item _icon-time">{{ __('app.mon_fre') }}: {{ settings('work_mon_fri', '8:00 — 20:00') }}, {{ __('app.sat') }}: {{ settings('work_sat', '10:00 — 18:00') }}, {{ __('app.sun') }}: {{ ($workTime = settings('work_sun', 'day off')) === 'day off' ? __('app.day_off') : $workTime }}</time>
                                </div>

                                <a href="{{ settings('viber_url') }}" class="top-header__chat viber">Viber</a>
                                <a href="{{ settings('telegram_url') }}" class="top-header__chat telegram">Telegram</a>
                                <a href="{{ settings('messenger_url') }}" class="top-header__chat messenger">Messenger</a>
                                <a href="{{ route('contacts') }}" class="top-header__all-contacts btn btn-clear">{{ __('app.all_contacts') }}</a>
                            </div>
                        </ul>
                    </div>
                </div>
                <address>
                    <a href="{{ route('contacts') }}" class="top-header__item _icon-location">
                        <span>{{ settings('address_' . app()->getLocale()) }}</span>
                    </a>
                </address>
                <time class="top-header__item _icon-time">{{ __('app.mon_fre') }}: {{ settings('work_mon_fri', '8:00 — 20:00') }}, {{ __('app.sat') }}: {{ settings('work_sat', '10:00 — 18:00') }}, {{ __('app.sun') }}: {{ ($workTime = settings('work_sun', 'day off')) === 'day off' ? __('app.day_off') : $workTime }}</time>
            </div>
            <div class="top-header__repair">
                <a href="{{ route('repair-status') }}" class="top-header__item _icon-wrench">{{ __('app.repair_status') }}</a>
            </div>
        </div>
    </div>

    <div class="header__body body-header">
        <div class="body-header__container">
            @if(request()->path() === '/' or request()->path() === 'ru')
                <span class="body-header__logo">
                    <img src="{{ asset('img/icon/logo.svg') }}" alt="{{ __('app.logo_alt') }}" title="{{ __('app.logo_title') }}">
                    {{ __('app.logo_description') }}
                </span>
            @else
                <a href="{{ route('home') }}" class="body-header__logo">
                    <img src="{{ asset('img/icon/logo.svg') }}" alt="{{ __('app.logo_alt') }}" title="{{ __('app.logo_title') }}">
                    {{ __('app.logo_description') }}
                </a>
            @endif

            <nav data-da=".header,1380,3" class="catalog-header__menu menu-catalog">
                <div class="menu-catalog__container">
                    <ul class="menu-catalog__list">
                        <li class="menu-catalog__item">
                            <button data-parent="1" class="menu-catalog__link _icon-arrow">{{ __('app.brands') }}</button>
                            <div class="sub-menu-catalog-1">
                                <div class="sub-menu-catalog__block-1">
                                    <div class="sub-menu-catalog__column">
                                        @foreach($brandsChunks as $brands)
                                            <ul class="sub-menu-catalog__list">
                                                @foreach($brands as $brand)
                                                    <li class="sub-menu-catalog__item">
                                                        <a href="{{ $brand->route() }}" class="sub-menu-catalog__link">{{ $brand->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endforeach
                                    </div>
                                    <div class="sub-menu-catalog__footer">
                                        <a href="{{ route('brands') }}" class="sub-menu-catalog__all">{{ __('app.all_brands') }}</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="menu-catalog__item">
                            <button data-parent="2" class="menu-catalog__link _icon-arrow">{{ __('app.coffee_machines_types') }}</button>
                            <div class="sub-menu-catalog-1">
                                <div class="sub-menu-catalog__block-1">
                                    <div class="sub-menu-catalog__column">
                                        @foreach($typesCoffeeMachinesChunks as $typesCoffeeMachines)
                                            <ul class="sub-menu-catalog__list">
                                                @foreach($typesCoffeeMachines as $typesCoffeeMachine)
                                                    <li class="sub-menu-catalog__item">
                                                        <a href="{{ $typesCoffeeMachine->route() }}" class="sub-menu-catalog__link">{{ $typesCoffeeMachine->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="menu-catalog__item">
                            <button data-parent="3" class="menu-catalog__link _icon-arrow">{{ __('app.types_repair') }}</button>
                            <div class="sub-menu-catalog-1">
                                <div class="sub-menu-catalog__block-1">
                                    <div class="sub-menu-catalog__column">
                                        @foreach($repairTypesChunks as $repairTypes)
                                            <ul class="sub-menu-catalog__list">
                                                @foreach($repairTypes as $repairType)
                                                    <li class="sub-menu-catalog__item">
                                                        <a href="{{ $repairType->route() }}" class="sub-menu-catalog__link">{{ $repairType->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="menu-catalog__item">
                            <button data-parent="4" class="menu-catalog__link _icon-arrow">{{ __('app.service_f') }}</button>
                            <div class="sub-menu-catalog-1">
                                <div class="sub-menu-catalog__block-1">
                                    <div class="sub-menu-catalog__column">
                                        @foreach($servicesChunks as $services)
                                            <ul class="sub-menu-catalog__list">
                                                @foreach($services as $service)
                                                    <li class="sub-menu-catalog__item">
                                                        <a href="{{ $service->route() }}" class="sub-menu-catalog__link">{{ $service->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="menu-catalog__item">
                            <a href="{{ route('prices') }}" class="menu-catalog__link">{{ __('app.prices') }}</a>
                        </li>

                        <li class="menu-catalog__item">
                            <button data-parent="5" class="menu-catalog__link _icon-arrow">{{ __('app.information') }}</button>

                            <div class="sub-menu-catalog-1">
                                <div class="sub-menu-catalog__block-1">
                                    <div class="sub-menu-catalog__column">
                                        <ul class="sub-menu-catalog__list">
                                            <li class="sub-menu-catalog__item">
                                                <a href="{{ route('page.view', 'delivery-and-payments') }}" class="sub-menu-catalog__link">Оплата</a>
                                            </li>
                                            <li class="sub-menu-catalog__item" style="display: none"><a href=""
                                                                                  class="sub-menu-catalog__link">Гарантії</a>
                                            </li>
                                            <li class="sub-menu-catalog__item">
                                                <a href="{{ route('faq') }}" class="sub-menu-catalog__link">{{ __('app.must_questions') }}</a>
                                            </li>
                                            <li class="sub-menu-catalog__item" style="display: none"><a href="" class="sub-menu-catalog__link">Про
                                                    компанію</a>
                                            </li>
                                            <li class="sub-menu-catalog__item" style="display: none"><a href=""
                                                                                  class="sub-menu-catalog__link">Відгуки</a>
                                            </li>
                                            <li class="sub-menu-catalog__item">
                                                <a href="{{ route('contacts') }}" class="sub-menu-catalog__link">{{ __('app.contacts') }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <div class="menu-catalog__sub-menu sub-menu-catalog">
                        <div class="sub-menu-catalog__back-wrapper">
                            <div class="sub-menu-catalog__container">
                                <button type="button" class="sub-menu-catalog__back _icon-arrow"></button>
                            </div>
                        </div>
                        <div class="sub-menu-catalog__container">
                            <div class="sub-menu-catalog__wrapper">
                                <div hidden data-submenu="1" class="sub-menu-catalog__block">
                                    <div class="sub-menu-catalog__column">
                                        @foreach($brandsChunks as $brands)
                                            <ul class="sub-menu-catalog__list">
                                                @foreach($brands as $brand)
                                                    <li class="sub-menu-catalog__item">
                                                        <a href="{{ $brand->route() }}" class="sub-menu-catalog__link">{{ $brand->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endforeach
                                    </div>
                                    <div class="sub-menu-catalog__footer">
                                        <a href="{{ route('brands') }}" class="sub-menu-catalog__all">{{ __('app.all_brands') }}</a>
                                    </div>
                                </div>

                                <div hidden data-submenu="2" class="sub-menu-catalog__block">
                                    <div class="sub-menu-catalog__column">
                                        @foreach($typesCoffeeMachinesChunks as $typesCoffeeMachines)
                                            <ul class="sub-menu-catalog__list">
                                                @foreach($typesCoffeeMachines as $typesCoffeeMachine)
                                                    <li class="sub-menu-catalog__item">
                                                        <a href="{{ $typesCoffeeMachine->route() }}" class="sub-menu-catalog__link">{{ $typesCoffeeMachine->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endforeach
                                    </div>
                                    <div class="sub-menu-catalog__footer">
                                        <a href="#" class="sub-menu-catalog__all">{{ __('app.all_types_repair') }}</a>
                                    </div>
                                </div>

                                <div hidden data-submenu="3" class="sub-menu-catalog__block">
                                    <div class="sub-menu-catalog__column">
                                        @foreach($repairTypesChunks as $repairTypes)
                                            <ul class="sub-menu-catalog__list">
                                                @foreach($repairTypes as $repairType)
                                                    <li class="sub-menu-catalog__item">
                                                        <a href="{{ $repairType->route() }}" class="sub-menu-catalog__link">{{ $repairType->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endforeach
                                    </div>
                                </div>

                                <div hidden data-submenu="4" class="sub-menu-catalog__block">
                                    <div class="sub-menu-catalog__column">
                                        @foreach($servicesChunks as $services)
                                            <ul class="sub-menu-catalog__list">
                                                @foreach($services as $service)
                                                    <li class="sub-menu-catalog__item">
                                                        <a href="{{ $service->route() }}" class="sub-menu-catalog__link">{{ $service->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endforeach
                                    </div>
                                </div>

                                <div hidden data-submenu="5" class="sub-menu-catalog__block">
                                    <div class="sub-menu-catalog__column">
                                        <ul class="sub-menu-catalog__list">
                                            <li class="sub-menu-catalog__item">
                                                <a href="{{ route('page.view', 'delivery-and-payments') }}" class="sub-menu-catalog__link">Оплата</a>
                                            </li>
                                            <li class="sub-menu-catalog__item" style="display: none"><a href=""
                                                                                                        class="sub-menu-catalog__link">Гарантії</a>
                                            </li>
                                            <li class="sub-menu-catalog__item">
                                                <a href="{{ route('faq') }}" class="sub-menu-catalog__link">{{ __('app.must_questions') }}</a>
                                            </li>
                                            <li class="sub-menu-catalog__item" style="display: none"><a href="" class="sub-menu-catalog__link">Про
                                                    компанію</a>
                                            </li>
                                            <li class="sub-menu-catalog__item" style="display: none"><a href=""
                                                                                                        class="sub-menu-catalog__link">Відгуки</a>
                                            </li>
                                            <li class="sub-menu-catalog__item">
                                                <a href="{{ route('contacts') }}" class="sub-menu-catalog__link">{{ __('app.contacts') }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="language-select__container">
                    <div class="language-select__row">
                        @foreach(locales() as $locale)
                            <a href="{{ $locale['localizedUrl'] }}" class="language-select__ua" @if($locale['isActive']) style="color: #69bd30" @endif>
                                {{ strtoupper($locale['name']) }}
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="button__container"></div>
            </nav>

            <div class="body-header__items">
                <div class="body-header__dropdown dropdown">
                    <button class="dropdown__button _icon-arrow">{{ strtoupper(app()->getLocale()) }}</button>
                    <ul class="dropdown__list">
                        @foreach(locales() as $locale)
                            <li class="dropdown__list-item" data-value="{{ $locale['name'] }}">
                                <a href="{{ $locale['localizedUrl'] }}" class="language-select__ua" @if($locale['isActive']) style="color: #69bd30" @endif>
                                    {{ strtoupper($locale['name']) }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <button data-popup="#popup-feedback" data-da=".button__container,767.98,1" type="submit" class="body-header__button btn">{{ __('app.order_master') }}</button>
                <button type="button" class="menu__icon icon-menu"><span></span></button>
            </div>
        </div>
    </div>
</header>
