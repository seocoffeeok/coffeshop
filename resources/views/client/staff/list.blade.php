@push('meta')
    @php($page = pages()->resolve('staff'))

    <x-client.head.meta
        :title="$page->meta_title ?? ''"
        :description="$page->meta_description ?? ''"
        :snippet="$page->snippet ?? ''"
        :url="route('staff.list')"
    />
@endpush

<x-client.layouts.app>
    <x-client.common.breadcrumbs :name="__('app.our_masters')"/>

    <div class="masters">
        <div class="masters__container">
            <h1 class="masters__title">{{ __('app.our_masters') }}</h1>

            <div class="masters__body">
                @foreach($staffs as $staff)
                    <x-client.staff.item :staff="$staff"/>
                @endforeach
            </div>

            <button type="submit" class="masters__button btn btn-w" style="display: none">{{ __('app.expand') }}</button>
        </div>
    </div>
</x-client.layouts.app>
