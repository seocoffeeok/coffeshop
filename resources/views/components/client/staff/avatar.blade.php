@props(['regalia', 'avatar' => null])

@if($avatar)
    <picture>
        <source srcset="{{ weserv($avatar->getFullUrl())->toUrl() }}" type="image/webp">
        <img src="{{ $avatar->getFullUrl() }}" alt="{{ $regalia }}">
    </picture>
@else
    <picture>
        <source srcset="{{ asset('img/main/Ivanov-Ivan.jpg') }}" type="image/webp">
        <img src="{{ asset('img/main/Ivanov-Ivan.jpg') }}" alt="{{ $regalia }}">
    </picture>
@endif
