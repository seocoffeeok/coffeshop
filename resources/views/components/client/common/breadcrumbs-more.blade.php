@props(['items'])

<div class="breadcrumb">
    <div class="breadcrumb__container">
        <ul class="breadcrumb__list">
            <li>
                <a href="{{ route('home') }}" class="breadcrumb__link">{{ __('app.repair_coffee_machines') }}</a>
            </li>
            @foreach($items as $key => $item)
                @if(count($items) - 1 === $key)
                    <li class="breadcrumb__active">{{ $item['name'] }}</li>
                @else
                    <li>
                        <a href="{{ $item['url'] }}" class="breadcrumb__link">{{ $item['name'] }}</a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</div>
