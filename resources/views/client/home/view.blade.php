@push('meta')
    @php($page = pages()->resolve('home'))

    <x-client.head.meta
        :title="$page->meta_title ?? ''"
        :description="$page->meta_description ?? ''"
        :snippet="$page->snippet ?? ''"
        :url="route('home')"
    />
@endpush

<x-client.layouts.app>
    <x-client.districts.nav-bar/>

    <div class="main">
        <div class="main__container">
            <form action="" class="main__body">
                <div class="main__image">
                    <picture>
                        <source srcset="{{ asset('img/main/kofemashina.webp') }}" type="image/webp">
                        <img src="{{ asset('img/main/kofemashina.png') }}" alt="{{ __('app.repair_in_kiev_page_alt') }}" title="{{ __('app.repair_in_kiev_page_title') }}">
                    </picture>
                </div>

                <div class="main__content">
                    <h1 data-da=".main__body,991.98,0" class="main__title">{{ __('app.repair_in_kiev_page_head') }}</h1>
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
            </form>
        </div>
    </div>

    <x-client.common.features/>

    <x-client.malfunction.top-malfunction/>

    <x-client.price.prices-widget/>

    <x-client.common.feedback-banner/>

    <div id="brendy" class="brands">
        <div class="brands__container">
            <h3 class="brands__title">{{ __('app.brands_of_coffee_machines_that_we_repair') }}</h3>
            <p class="brands__text">{{ __('app.we_repair_coffee_machines_of_almost_all_brands_of_any_complexity') }}</p>

            <x-client.brand.brand-list take="12"/>

            <a href="{{ route('brands') }}" class="brands__all-brands btn btn-w">{{ __('app.all_brands') }}</a>
        </div>
    </div>

    <x-client.contacts.stages/>

    @if($page->body)
        <div class="content">
            <div class="content__container">
                <div data-showmore class="block">
                    <div data-showmore-content class="block__content">
                        {!! $page->body !!}
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

    <x-client.contacts.map/>
</x-client.layouts.app>
