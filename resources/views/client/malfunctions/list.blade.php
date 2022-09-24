@push('meta')
    @php($page = pages()->resolve('malfunctions'))

    <x-client.head.meta
        :title="$page->meta_title ?? ''"
        :description="$page->meta_description ?? ''"
        :snippet="$page->snippet ?? ''"
        :url="route('malfunctions.list')"
    />
@endpush

<x-client.layouts.app>
    <x-client.common.breadcrumbs :name="__('app.popular_malfunctions')"/>

    <div class="models" x-data="search">
        <div class="models__container">
            <h2 class="models__title">
                {{ __('app.popular_malfunctions') }}
            </h2>

            <x-client.common.js-search/>

            <x-client.malfunction.malfunction-list/>
        </div>
    </div>

    <script>

    </script>
</x-client.layouts.app>
