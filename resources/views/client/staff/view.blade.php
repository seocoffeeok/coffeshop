@push('meta')
    <x-client.head.meta
        :title="$staff->name"
        :description="$staff->description"
        :snippet="''"
        :url="$staff->route()"
    />
@endpush

@php($avatar = $staff->getAvatarMedia())
@php($certificates = $staff->getCertificatesMedia())

<x-client.layouts.app>
    <x-client.common.breadcrumbs-more :items="$staff->breadcrumbs()"/>

    <div class="biography">
        <div class="biography__container">
            <div class="biography__body">
                <div class="biography__image">
                    <x-client.staff.avatar :avatar="$avatar" :regalia="$staff->regalia"/>
                </div>
                <div class="biography__content">
                    <h1 class="biography__title">{{ $staff->name }}</h1>
                    <span class="biography__title-secondary">{{ $staff->regalia }}</span>
                    <p class="biography__text">
                        {!! $staff->description !!}
                    </p>
                    <h2 class="biography__title-2">{{ __('app.merit') }}</h2>
                    <p class="biography__text">
                        {!! $staff->merit !!}
                    </p>
                </div>
            </div>
        </div>
    </div>

    @if($certificates->isNotEmpty())
        <div class="certificates">
            <div class="certificates__container">
                <h2 class="certificates__title">{{ __('app.certificates') }}</h2>
                <div class="certificates__slider swiper">
                    <div data-gallery class="certificates__wrapper swiper-wrapper">
                        @foreach($certificates as $certificate)
                            <x-client.common.file :file="$certificate"/>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    @endif

    <div class="master-reviews">
        <div class="master-reviews__container">
            <h2 class="master-reviews__title">{{ __('app.reviews') }}</h2>
            <div class="master-reviews__row">
                <h3 class="master-reviews__title-3 content__title-3">
                    {{ __('app.reviews_count', ['count' => $staff->reviews()->count()]) }}
                </h3>
                <button data-popup="#popup-reviews" type="submit" class="master-reviews__button btn btn-w">{{ __('app.add_review') }}</button>
            </div>

            <div data-showmore data-showmore-content="5">
                @foreach($reviews as $review)
                    <x-client.reviews.item :review="$review"/>
                @endforeach

                @if($reviews->count() > 5)
                    <button hidden data-showmore-button type="button" class="master-reviews__more-reviews btn btn-w">{{ __('app.more_reviews') }}</button>
                @endif
            </div>
        </div>
    </div>

    <x-client.common.review-popup
        :model-type="\Domain\Staff\Models\Staff::class"
        :model-id="$staff->id"
    />
</x-client.layouts.app>
