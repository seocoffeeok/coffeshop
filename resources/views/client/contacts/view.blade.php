@push('meta')
    @php($page = pages()->resolve('contacts'))

    <x-client.head.meta
        :title="$page->meta_title ?? ''"
        :description="$page->meta_description ?? ''"
        :snippet="$page->snippet ?? ''"
        :url="route('contacts')"
    />
@endpush

<x-client.layouts.app>
    <x-client.common.breadcrumbs :name="__('app.contacts')"/>

    <x-client.contacts.map/>
    <x-client.contacts.stages/>
    <x-client.common.feedback-banner/>
    <x-client.contacts.payment/>

</x-client.layouts.app>
