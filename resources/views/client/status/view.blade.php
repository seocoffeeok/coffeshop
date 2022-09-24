@push('meta')
    @php($page = pages()->article())

    <x-client.head.meta
        :title="$page->meta_title ?? ''"
        :description="$page->meta_description ?? ''"
        :snippet="$page->snippet ?? ''"
        :url="route('home')"
    />
@endpush

<x-client.layouts.app>
    <x-client.common.breadcrumbs name="Status"/>

    <div class="repair-status">
        <div class="repair-status__container">
            <form action="" class="repair-status__form">
                <h1 class="repair-status__title">
                    Статус ремонту
                </h1>
                <p class="repair-status__text">
                    Для отримання інформації про статус ремонту вашої техніки в нашому сервісному центрі, будь ласка,
                    введіть у форму нижче відповідний номер замовлення.
                </p>
                <input class="repair-status__input" name="phone" type="tel" required=""
                       placeholder="+38 (000) 000-00-00">
                <button type="submit" class="repair-status__button btn">Пошук</button>
            </form>
        </div>
    </div>
    <div class="map">
        <div class="map__container">
					<span class="map__title">
						Контакти Coffeeok Service в Києві
					</span>
            <div id="map_container" class="map__wrapper">
                <div class="map__image">
                    <picture>
                        <source srcset="img/main/map.webp" type="image/webp"><img src="img/main/map.png" alt="Карта">
                    </picture>
                </div>
                <iframe class="map__iframe" id="ymap_lazy" async
                        data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.45684685815!2d30.471413815615822!3d50.45121697947542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce86da083c6b%3A0xaf2ac4c7867412e5!2z0LLRg9C70LjRhtGPINCh0YLQsNGA0L7QutC40ZfQstGB0YzQutCwLCAxMNCTLCA1INGN0YLQsNC2LCDQvtGE0LjRgSA1NTUsINCa0LjRl9CyLCAwNDY1NQ!5e0!3m2!1suk!2sua!4v1658387473327!5m2!1suk!2sua"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="map__select">
                    <select name="form[]" class="form">
                        <option value="1" selected>Пункт 1 - Вул. 23 Серпня 58</option>
                        <option value="2">Пункт 2 - Вул. 23 Серпня 58</option>
                        <option value="3">Пункт 3 - Вул. 23 Серпня 58</option>
                        <option value="4">Пункт 4 - Вул. 23 Серпня 58</option>
                    </select>
                </div>
            </div>
            <div class="map__row">
                <div class="map__items">
                    <span class="map__icon _icon-phone-1"></span>
                    <div class="map__column">
                        <label class="map__label">Телефон</label>
                        <a href="tel:+380999999999" class="map__text">
                            +38 099 999 99
                        </a>
                    </div>
                </div>
                <div class="map__items">
                    <span class="map__icon _icon-sms"></span>
                    <div class="map__column">
                        <label class="map__label">Пошта</label>
                        <a href="mailto:info@ucoffee-machines.com" class="map__text">
                            info@ucoffee-machines.com
                        </a>
                    </div>
                </div>
                <address class="map__items">
                    <span class="map__icon _icon-location"></span>
                    <div class="map__column">
                        <label class="map__label">Адреса</label>
                        <p class="map__text">
                            Вул. 23 Серпня 58
                        </p>
                    </div>
                </address>
                <time class="map__items">
                    <span class="map__icon _icon-time"></span>
                    <div class="map__column">
                        <label class="map__label">Години роботи</label>
                        <p class="map__text">
                            8:00 - 21:00 без вихідних
                        </p>
                    </div>
                </time>
            </div>
        </div>
    </div>
    <div class="feedback">
        <div class="feedback__container">
            <div class="feedback__wrapper">
						<span class="feedback__title">
							Служба технічної підтримки
							в твоїх месенджерах
						</span>
                <p class="feedback__text">
                    Обери зручний спосіб комунікації, тисни та спілкуйся. Наші техніки нададуть вичерпну консультацію з
                    приводу ремонту кавомашин.
                </p>
                <div class="feedback__body">
                    <div class="feedback__items">
                        <a href="" class="feedback__icon _icon-telegram-2"></a>
                        <div class="feedback__messenger">Telegram</div>
                    </div>
                    <div class="feedback__items">
                        <a href="" class="feedback__icon _icon-messenger-2"></a>
                        <div class="feedback__messenger">Facebook</div>
                    </div>
                    <div class="feedback__items">
                        <a href="" class="feedback__icon _icon-viber-2"></a>
                        <div class="feedback__messenger">Viber</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-client.layouts.app>
