@push('meta')
    <x-client.head.meta
        :title="$page->meta_title ?? ''"
        :description="$page->meta_description ?? ''"
        :snippet="$page->snippet ?? ''"
        :url="route('page.view', $page->slug)"
    />
@endpush

<x-client.layouts.app>
    <x-client.common.breadcrumbs :name="$page->meta_title"/>

    <div class="content text-page">
        <div class="content__container">
            {!! $page->body !!}
        </div>
    </div>
</x-client.layouts.app>
