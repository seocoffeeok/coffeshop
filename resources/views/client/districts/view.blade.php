@push('meta')
    <x-client.head.meta
        :title="__('app.repair_coffee_machines_in_district', ['district' => $district->declination])"
        :description="strip_tags($district->description) ?? ''"
        :snippet="''"
        :url="$district->route()"
    />
@endpush

<x-client.layouts.app>
    <x-client.districts.nav-bar/>

    <x-client.common.breadcrumbs-more :items="$district->breadcrumbs()"/>

    <div class="main">
        <div class="main__container">
            <div class="main__body">
                <div class="main__image">
                    <picture>
                        <source srcset="{{ asset('img/brands/kofemashina-saeco.webp') }}" type="image/webp">
                        <img src="{{ asset('img/brands/kofemashina-saeco.png') }}" alt="{{ $district->name }}">
                    </picture>
                </div>
                <div class="main__content">
                    <h1 data-da=".main__body,991.98,0" class="main__title">{{ __('app.repair_coffee_machines_in_district', ['district' => $district->declination]) }}</h1>

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

    @if($district->short_description)
        <div class="content">
            <div class="content__container">
                <div data-showmore class="block">
                    <div data-showmore-content="100" class="block__content">
                        {!! $district->short_description !!}
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

    @if($district->prices->isNotEmpty())
        <div id="tseny" class="price">
            <div class="price__container">
                <h2 class="price__title">{{ __('app.prices_for_repairing_coffee_machines') }}</h2>

                <x-client.districts.prices-list :prices="$district->prices"/>
            </div>
        </div>
    @endif

    <x-client.common.feedback-banner/>

    <x-client.districts.services/>

    <div id="brendy" class="brands">
        <div class="brands__container">
            <h3 class="brands__title">{{ __('app.brands_of_coffee_machines_that_we_repair') }}</h3>
            <p class="brands__text">{{ __('app.we_repair_coffee_machines_of_almost_all_brands_of_any_complexity') }}</p>

            <x-client.brand.brand-list take="12"/>

            <a href="{{ route('brands') }}" class="brands__all-brands btn btn-w">{{ __('app.all_brands') }}</a>
        </div>
    </div>


    @if($district->description)
        <div class="content">
            <div class="content__container">
                <div data-showmore class="block">
                    <div data-showmore-content class="block__content">
                        {!! $district->description !!}
                    </div>

                    <button hidden data-showmore-button type="button" class="content__more">
                        <span class="showmore__icon _icon-arrow">{{ __('app.read_more') }}</span>
                        <span class="showmore__icon showmore__icon-down _icon-arrow">{{ __('app.collapse') }}</span>
                    </button>
                </div>
            </div>
        </div>
    @endif

    <x-client.common.faq/>

    <x-client.common.reviews/>

    <div id="kontakty" class="map">
        <div class="map__container">
            <span class="map__title">{{ __('app.repair_coffee_machines_in_district', ['district' => $district->declination]) }}</span>
            <p class="map__text-top">{!! __('app.repair_in_description', ['district' => $district->declination]) !!}</p>
            <div id="map_container" class="map__wrapper">
                <x-client.common.google-maps/>
            </div>
        </div>
    </div>
</x-client.layouts.app>
