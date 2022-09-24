@push('meta')
    <x-client.head.meta
        :title="$service->name"
        :description="strip_tags($service->description) ?? ''"
        :snippet="''"
        :url="$service->route()"
    />
@endpush

<x-client.layouts.app>
    <x-client.districts.nav-bar/>

    <x-client.common.breadcrumbs-more :items="$service->breadcrumbs()"/>

    <div class="main">
        <div class="main__container">
            <div class="main__body">
                <div class="main__image">
                    @if($image = $service->getImageMedia())
                        <picture>
                            <source srcset="{{ $image->getFullUrl() }}" type="image/webp">
                            <img
                                src="{{ weserv($image->getFullUrl())->toUrl() }}"
                                alt="{{ $service->name }}"
                                title="{{ $service->name }}">
                        </picture>
                    @endif
                </div>
                <div class="main__content">
                    <h1 data-da=".main__body,991.98,0" class="main__title">{{ $service->name }}</h1>

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

    @if($service->short_description)
        <div class="content">
            <div class="content__container">
                <div data-showmore class="block">
                    <div data-showmore-content="100" class="block__content">
                        {!! $service->short_description !!}
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

    @if($service->prices->isNotEmpty())
        <div id="tseny" class="price">
            <div class="price__container">
                <h2 class="price__title">{{ __('app.prices_for_repairing_coffee_machines') }}</h2>

                <x-client.type.prices-list :prices="$service->prices"/>
            </div>
        </div>
    @endif

    <div id="brendy" class="brands">
        <div class="brands__container">
            <h3 class="brands__title">{{ __('app.brands_of_coffee_machines_that_we_repair') }}</h3>
            <p class="brands__text">{{ __('app.we_repair_coffee_machines_of_almost_all_brands_of_any_complexity') }}</p>

            <x-client.brand.brand-list take="12"/>

            <a href="{{ route('brands') }}" class="brands__all-brands btn btn-w">{{ __('app.all_brands') }}</a>
        </div>
    </div>

    <x-client.common.feedback-banner/>

    @if($service->description)
        <div class="content">
            <div class="content__container">
                <div data-showmore class="block">
                    <div data-showmore-content class="block__content">
                        {!! $service->description !!}
                    </div>

                    <button hidden data-showmore-button type="button" class="content__more">
                        <span class="showmore__icon _icon-arrow">{{ __('app.read_more') }}</span>
                        <span class="showmore__icon showmore__icon-down _icon-arrow">{{ __('app.collapse') }}</span>
                    </button>
                </div>
            </div>
        </div>
    @endif

    <x-client.price.prices-widget/>

    <x-client.common.faq/>

    <x-client.common.reviews/>
</x-client.layouts.app>
