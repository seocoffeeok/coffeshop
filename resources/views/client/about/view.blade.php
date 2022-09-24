@push('meta')
    <x-client.head.meta
        :title="$page->meta_title ?? ''"
        :description="$page->meta_description ?? ''"
        :snippet="$page->snippet ?? ''"
        :url="route('about')"
    />
@endpush

<x-client.layouts.app>
    <x-client.common.breadcrumbs :name="__('app.about_company')"/>

    <div class="about">
        <div class="about__container">
            <h1 class="about__title">{{ __('app.about_company') }}</h1>

            @if($body = $page->body)
                <div class="about__text">
                    {!! $body !!}
                </div>
            @endif

            @if($galleryMedia = $page->getGalleryMedia())
                <div class="about__slider swiper">
                <div class="about__wrapper swiper-wrapper">
                    @foreach($galleryMedia as $media)
                        <div class="about__slide swiper-slide">
                            <picture>
                                <source srcset="{{ $media->getFullUrl() }}" type="image/webp">
                                <img src="{{ weserv($media->getFullUrl())->toUrl() }}" alt="{{ __('app.about_company') }}">
                            </picture>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
            @endif
        </div>
    </div>

    <x-client.common.features/>

    @if($certificates = $page->getCertificatesMedia())
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
</x-client.layouts.app>
