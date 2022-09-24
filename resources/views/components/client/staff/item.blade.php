@props(['staff'])

@php($avatar = $staff->getAvatarMedia())

<a href="{{ $staff->route() }}" class="masters__items">
    <div class="masters__image-ibg">
        <x-client.staff.avatar :avatar="$avatar" :regalia="$staff->regalia"/>
    </div>
    <div class="masters__content">
        <h3 class="masters__title-3">{{ $staff->name }}</h3>
        <p class="masters__job-title">{{ $staff->regalia }}</p>
        <p class="masters__text">
            {!! $staff->description !!}
        </p>
    </div>
</a>
