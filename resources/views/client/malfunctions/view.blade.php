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
    <x-client.districts.nav-bar/>

    <x-client.common.breadcrumbs-more :items="$malfunction->breadcrumbs()"/>

    <div class="main">
        <div class="main__container">
            <div class="main__body">
                <div class="main__image">
                    @if($image = $malfunction->getImageMedia())
                        <picture>
                            <source srcset="{{ $image->getFullUrl() }}" type="image/webp">
                            <img
                                src="{{ weserv($image->getFullUrl())->toUrl() }}"
                                alt="{{ $malfunction->name }}"
                                title="{{ $malfunction->name }}">
                        </picture>
                    @endif
                </div>
                <div class="main__content">
                    <h1 data-da=".main__body,991.98,0" class="main__title">
                        {{ $malfunction->name }}
                    </h1>
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

    @if($malfunction->short_description)
        <div class="content">
            <div class="content__container">
                <div data-showmore class="block">
                    <div data-showmore-content="100" class="block__content">
                        {!! $malfunction->short_description !!}
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

    @if($malfunction->prices->isNotEmpty())
        <div id="tseny" class="price">
            <div class="price__container">
                <h2 class="price__title">{{ __('app.prices_for_repairing_coffee_machines_with_a_defect_malfunction', ['name' => $malfunction->name]) }}</h2>

                <x-client.malfunction.prices-list :prices="$malfunction->prices"/>
            </div>
        </div>
    @endif

    <x-client.common.feedback-banner/>

    @if($malfunction->description)
        <div class="content">
            <div class="content__container">
                <div data-showmore class="block">
                    <div data-showmore-content class="block__content">
                        {!! $malfunction->description !!}
                    </div>

                    <button hidden data-showmore-button type="button" class="content__more">
                        <span class="showmore__icon _icon-arrow">{{ __('app.read_more') }}</span>
                        <span class="showmore__icon showmore__icon-down _icon-arrow">{{ __('app.collapse') }}</span>
                    </button>
                </div>
            </div>
        </div>
    @endif

    <x-client.malfunction.top-malfunction/>

    <x-client.common.faq/>

    <x-client.common.reviews/>
</x-client.layouts.app>
