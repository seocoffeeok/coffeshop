@push('meta')
    @php($page = pages()->notFound())

    <x-client.head.meta
        :title="$page->meta_title ?? ''"
        :description="$page->meta_description ?? ''"
        :snippet="$page->snippet ?? ''"
        :url="request()->url()"
    />
@endpush

<x-client.layouts.app>
    <x-client.common.breadcrumbs name="404"/>

    <div class="not-found">
        <div class="not-found__container">
            <div class="not-found__image">
                <picture>
                    <source srcset="{{ asset('img/main/404-page.webp') }}" type="image/webp">
                    <img src="{{ asset('img/main/404-page.png') }}" alt="{{ __('app.page_not_found') }}" title="{{ __('app.page_not_found') }}">
                </picture>
            </div>
            <h1 class="not-found__title">
                {{ __('app.page_not_found_description') }}
            </h1>
            <p class="not-found__text">
                {{ __('app.page_not_found_cta') }}
            </p>
            <a href="{{ route('home') }}" class="not-found__link btn btn-w">{{ __('app.go_home') }}</a>
        </div>
    </div>
</x-client.layouts.app>
