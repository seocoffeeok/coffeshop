@push('meta')
    @php($page = pages()->resolve('districts'))

    <x-client.head.meta
        :title="$page->meta_title ?? ''"
        :description="$page->meta_description ?? ''"
        :snippet="$page->snippet ?? ''"
        :url="route('district.list')"
    />
@endpush

<x-client.layouts.app>
    <x-client.common.breadcrumbs :name="__('app.districts')"/>

    <div class="models" x-data="search">
        <div class="models__container">
            <h2 class="models__title">
                {{ __('app.we_go_to_all_districts_of_kyiv') }}
            </h2>

            <x-client.common.js-search/>

            <x-client.district.district-list/>
        </div>
    </div>

    <script>

    </script>
</x-client.layouts.app>
