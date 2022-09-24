@push('meta')
    @php($page = pages()->resolve('faq'))

    <x-client.head.meta
        :title="$page->meta_title ?? ''"
        :description="$page->meta_description ?? ''"
        :snippet="$page->snippet ?? ''"
        :url="route('home')"
    />
@endpush

<x-client.layouts.app>
    <x-client.common.breadcrumbs :name="__('app.must_questions')"/>

    <div class="answers">
        <div class="answers__container">
            <div class="answers__body-2">
                <h3 class="answers__title-2">{{ __('app.must_questions') }}</h3>

                <x-client.faq.faq-list/>
            </div>
        </div>
    </div>
</x-client.layouts.app>
