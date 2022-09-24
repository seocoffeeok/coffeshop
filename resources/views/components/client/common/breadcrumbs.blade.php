@props(['name'])

<div class="breadcrumb">
    <div class="breadcrumb__container">
        <ul class="breadcrumb__list">
            <li>
                <a href="{{ route('home') }}" class="breadcrumb__link">{{ __('app.home') }}</a>
            </li>
            <li class="breadcrumb__active">{{ $name }}</li>
        </ul>
    </div>
</div>
