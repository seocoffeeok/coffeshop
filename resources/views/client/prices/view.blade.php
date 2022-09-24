@push('meta')
    @php($page = pages()->resolve('price'))

    <x-client.head.meta
        :title="$page->meta_title ?? ''"
        :description="$page->meta_description ?? ''"
        :snippet="$page->snippet ?? ''"
        :url="route('prices')"
    />
@endpush

<x-client.layouts.app>
    <x-client.common.breadcrumbs :name="$page->meta_title"/>

    <div class="main">
        <div class="main__container">
            <div class="main__body">
                <div class="main__image">
                    <picture>
                        <source srcset="{{ asset('img/brands/kofemashina-saeco.webp') }}" type="image/webp">
                        <img src="{{ asset('img/brands/kofemashina-saeco.png') }}" alt="{{ __('app.prices_alt') }}" title="{{ __('app.prices_title') }}">
                    </picture>
                </div>

                <div class="main__content">
                    <h1 data-da=".main__body,991.98,0" class="main__title">
                        {{ __('app.prices_page_head') }}
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

    @if($page->short_body)
        <div class="content">
            <div class="content__container">
                <div data-showmore class="block">
                    <div data-showmore-content="100" class="block__content">
                        {!! $page->short_body !!}
                    </div>
                    <button hidden data-showmore-button type="button" class="content__more">
                        <span class="showmore__icon _icon-arrow">{{ __('app.read_more') }}</span>
                        <span class="showmore__icon showmore__icon-down _icon-arrow">{{ __('app.collapse') }}</span>
                    </button>
                </div>
            </div>
        </div>
    @endif


    <div class="price" x-data="search">
        <div class="price__container">
            <h2 class="price__title">{{ __('app.prices_of_repair') }}</h2>

            <x-client.common.js-search/>

            <x-client.price.price-list/>
        </div>
    </div>

    <x-client.common.feedback-banner/>

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

</x-client.layouts.app>
