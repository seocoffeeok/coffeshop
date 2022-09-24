@push('meta')
    @php($page = pages()->resolve('brands'))

    <x-client.head.meta
        :title="$page->meta_title ?? ''"
        :description="$page->meta_description ?? ''"
        :snippet="$page->snippet ?? ''"
        :url="route('home')"
    />
@endpush

<x-client.layouts.app>
    <x-client.common.breadcrumbs :name="__('app.brands')"/>

    <div class="brands" x-data="search">
        <div class="brands__container">
            <h3 class="brands__title">{{ __('app.brands_of_coffee_machines_that_we_repair') }}</h3>
            <p class="brands__text">{{ __('app.we_repair_coffee_machines_of_almost_all_brands_of_any_complexity') }}</p>

            <x-client.common.js-search/>

            <x-client.brand.brand-list/>
        </div>
    </div>
</x-client.layouts.app>
