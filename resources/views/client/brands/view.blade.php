@push('meta')
    <x-client.head.meta
        :title="__('app.repair_of_name_coffee_machines_in_kyiv', ['name' => $brand->name])"
        :description="__('app.repair_of_name_coffee_machines_in_kyiv_description', ['name' => $brand->name])"
        :url="$brand->route()"
    />
@endpush

<x-client.layouts.app>
    <x-client.districts.nav-bar/>

    <x-client.common.breadcrumbs-more :items="$brand->breadcrumbs()"/>

    <div class="main">
        <div class="main__container">
            <div class="main__body">
                <div class="main__image">
                    @if($image = $brand->getImageViewMedia())
                        <picture>
                            <source srcset="{{ $image->getFullUrl() }}" type="image/webp">
                            <img
                                src="{{ weserv($image->getFullUrl())->toUrl() }}"
                                alt="{{ __('app.repair_of_name_coffee_machines_in_kyiv_description', ['name' => $brand->name]) }}"
                                title="{{ __('app.repair_of_name_coffee_machines_in_kyiv_description', ['name' => $brand->name]) }}">
                        </picture>
                    @endif
                </div>
                <div class="main__content">
                    <h1 data-da=".main__body,991.98,0" class="main__title">
                        {{ __('app.repair_of_name_coffee_machines_in_kyiv_description', ['name' => $brand->name]) }}
                    </h1>
                    <p class="main__text">{{ __('app.visit_of_the_master_in_kyiv_and_the_kyiv_region') }}</p>
                    <ul class="main__list">
                        <li class="main__item">{{ __('app.features_one') }}</li>
                        <li class="main__item">{{ __('app.features_two') }}</li>
                        <li class="main__item">{{ __('app.features_there') }}</li>
                        <li class="main__item">{{ __('app.features_four') }}</li>
                    </ul>

                    <x-client.common.phone-form/>
                </div>
                <p class="main__discount">
                    <span class="main__icon _icon-clock"></span>
                    {!! __('app.happy_time') !!}
                </p>
            </div>
        </div>
    </div>

    @if($brand->short_description)
        <div class="content">
            <div class="content__container">
                <div data-showmore class="block">
                    <div data-showmore-content="100" class="block__content">
                        {!! $brand->short_description !!}
                    </div>
                    <button hidden data-showmore-button type="button" class="content__more">
                        <span class="showmore__icon _icon-arrow">{{ __('app.read_more') }}</span>
                        <span class="showmore__icon showmore__icon-down _icon-arrow">{{ __('app.collapse') }}</span>
                    </button>
                </div>
            </div>
        </div>
    @endif

    <x-client.common.features/>

    @if($brand->prices->isNotEmpty())
        <div id="tseny" class="price">
            <div class="price__container">
                <h2 class="price__title">{{ __('app.prices_for_repairing_coffee_machines_name', ['name' => $brand->name]) }}</h2>

                <x-client.brand.prices-list :prices="$brand->prices"/>
            </div>
        </div>
    @endif


    @if($brand->models->isNotEmpty())
        <div id="modeli" class="models" x-data="search">
            <div class="models__container">
                <h2 class="models__title">{{ __('app.coffee_machines_models_name', ['name' => $brand->name]) }}</h2>
                <p class="models__text">{{ __('app.coffee_machines_models_description') }}</p>

                <x-client.common.js-search/>

                <ul data-showmore="items" class="models__list">
                    <div data-showmore-content="10" class="models__content" x-ref="searchBlocksDiv">
                        @foreach($brand->models as $model)
                            <li class="models__item" data-name="{{ $model->name }}">
                                <a href="{{ $model->route() }}">{{ $model->name }}</a>
                            </li>
                        @endforeach
                    </div>

                    @if($brand->models->count() > 24)
                        <button hidden data-showmore-button type="button" class="models__button btn btn-w">
                            <span>{{ __('app.expand') }}</span>
                            <span>{{ __('app.collapse') }}</span>
                        </button>
                    @endif
                </ul>
            </div>
        </div>
    @endif

    <x-client.common.feedback-banner/>

    @if($brand->description)
        <div class="content">
            <div class="content__container">
                <div data-showmore class="block">
                    <div data-showmore-content class="block__content">
                        {!! $brand->description !!}
                    </div>

                    <button hidden data-showmore-button type="button" class="content__more">
                        <span class="showmore__icon _icon-arrow">{{ __('app.read_more') }}</span>
                        <span class="showmore__icon showmore__icon-down _icon-arrow">{{ __('app.collapse') }}</span>
                    </button>
                </div>
            </div>
        </div>
    @endif

    <div id="uslugi" class="services">
        <div class="services__container">
            <h2 class="services__title">
                Часто виконувані послуги по ремонту кавомашин в Cofeeok Service
            </h2>
            <p class="services__text">
                Сервісний центр Coffeeok Service надає широкий спектр послуг по обслуговуванню та ремонту машин
                кавомашин в Києві та області
            </p>
            <div class="services__body">
                <div data-showmore="items" class="services__column">
							<span class="services__title-secondary">
								Сервіс кавомашин
							</span>
                    <ul data-showmore-content="5" class="services__list">
                        <li><a href="" class="services__link">
                                Діагностика кавомашин
                            </a></li>
                        <li><a href="" class="services__link">
                                Обслуговування
                            </a></li>
                        <li><a href="" class="services__link">
                                Діагностика
                            </a></li>
                        <li><a href="" class="services__link">
                                Виїздний ремонт кавомашин
                            </a></li>
                        <li><a href="" class="services__link">
                                Дезінсекція кавомашин від комах
                            </a></li>
                        <li><a href="" class="services__link">
                                Діагностика кавомашин
                            </a></li>
                        <li><a href="" class="services__link">
                                Обслуговування
                            </a></li>
                        <li><a href="" class="services__link">
                                Діагностика
                            </a></li>
                        <li><a href="" class="services__link">
                                Виїздний ремонт кавомашин
                            </a></li>
                        <li><a href="" class="services__link">
                                Дезінсекція кавомашин від комах
                            </a></li>
                        <li><a href="" class="services__link">
                                Діагностика кавомашин
                            </a></li>
                    </ul>
                    <div class="services__row">
                        <button hidden data-showmore-button type="button" class="services__more">
                            <span class="showmore__icon _icon-arrow">+ 6 ще</span>
                            <span class="showmore__icon showmore__icon-down _icon-arrow">Згорнути</span>
                        </button>
                        <div class="services__price">ВІД 200 ГРН.</div>
                    </div>
                </div>
                <div data-showmore="items" class="services__column">
							<span class="services__title-secondary">
								Види ремонту
							</span>
                    <ul data-showmore-content="5" class="services__list">
                        <li><a href="" class="services__link">
                                Заміна бойлера
                            </a></li>
                        <li><a href="" class="services__link">
                                Заміна клапана
                            </a></li>
                        <li><a href="" class="services__link">
                                Заміна плати
                            </a></li>
                        <li><a href="" class="services__link">
                                Заміна помпи/насоса
                            </a></li>
                        <li><a href="" class="services__link">
                                Заміна кавомолки
                            </a></li>
                        <li><a href="" class="services__link">
                                Заміна бойлера
                            </a></li>
                        <li><a href="" class="services__link">
                                Заміна клапана
                            </a></li>
                        <li><a href="" class="services__link">
                                Заміна плати
                            </a></li>
                        <li><a href="" class="services__link">
                                Заміна помпи/насоса
                            </a></li>
                        <li><a href="" class="services__link">
                                Заміна кавомолки
                            </a></li>
                        <li><a href="" class="services__link">
                                Заміна бойлера
                            </a></li>
                    </ul>
                    <div class="services__row">
                        <button hidden data-showmore-button type="button" class="services__more">
                            <span class="showmore__icon _icon-arrow">+ 6 ще</span>
                            <span class="showmore__icon showmore__icon-down _icon-arrow">Згорнути</span>
                        </button>
                        <div class="services__price">ВІД 200 ГРН.</div>
                    </div>
                </div>
                <div data-showmore="items" class="services__column">
							<span class="services__title-secondary">
								Тип кавомашини
							</span>
                    <ul data-showmore-content="5" class="services__list">
                        <li><a href="" class="services__link">
                                Автоматичні
                            </a></li>
                        <li><a href="" class="services__link">
                                Рожкові
                            </a></li>
                        <li><a href="" class="services__link">
                                Капсульні
                            </a></li>
                        <li><a href="" class="services__link">
                                Вендингові
                            </a></li>
                        <li><a href="" class="services__link">
                                Автоматичні
                            </a></li>
                        <li><a href="" class="services__link">
                                Рожкові
                            </a></li>
                        <li><a href="" class="services__link">
                                Капсульні
                            </a></li>
                        <li><a href="" class="services__link">
                                Вендингові
                            </a></li>
                        <li><a href="" class="services__link">
                                Автоматичні
                            </a></li>
                        <li><a href="" class="services__link">
                                Рожкові
                            </a></li>
                        <li><a href="" class="services__link">
                                Капсульні
                            </a></li>
                    </ul>
                    <div class="services__row">
                        <button hidden data-showmore-button type="button" class="services__more">
                            <span class="showmore__icon _icon-arrow">+ 6 ще</span>
                            <span class="showmore__icon showmore__icon-down _icon-arrow">Згорнути</span>
                        </button>
                        <div class="services__price">ВІД 200 ГРН.</div>
                    </div>
                </div>
            </div>
            <a href="" class="services__all-services btn btn-w">Усі послуги та ціни</a>
        </div>
    </div>

    <div id="brendy" class="brands">
        <div class="brands__container">
            <h3 class="brands__title">{{ __('app.brands_of_coffee_machines_that_we_repair') }}</h3>
            <p class="brands__text">{{ __('app.we_repair_coffee_machines_of_almost_all_brands_of_any_complexity') }}</p>

            <x-client.brand.brand-list take="12"/>

            <a href="{{ route('brands') }}" class="brands__all-brands btn btn-w">{{ __('app.all_brands') }}</a>
        </div>
    </div>

    <x-client.common.faq/>

    <x-client.common.reviews/>

</x-client.layouts.app>
