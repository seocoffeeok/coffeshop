@props(['file'])


<a href="{{ $file->getFullUrl() }}" target="_blank" class="certificates__slide swiper-slide">
    @if(str_contains($file->mime_type, 'image/') !== false)
        <picture>
            <source srcset="{{ $file->getFullUrl() }}" type="image/webp">
            <img src="{{ weserv($file->getFullUrl())->toUrl() }}" alt="{{ $file->name }}">
        </picture>
    @else
        <picture>
            <source srcset="{{ asset('/img/default-image.png') }}" type="image/webp">
            <img src="{{ weserv(asset('/img/default-image.png'))->toUrl() }}" alt="{{ $file->name }}">
        </picture>
    @endif
</a>
