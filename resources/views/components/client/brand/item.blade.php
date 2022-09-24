@props(['brand'])

<div class="brands__items" data-name="{{ $brand->name }}">
    <a href="{{ $brand->route() }}" class="brands__image">
        <img src="{{ weserv($brand->getImageMedia()?->getFullUrl()) }}"
             alt="{{ __('app.repair_of_name_coffee_machines', ['name' => $brand->name]) }}"
             title="{{ __('app.repair_of_name_coffee_machines', ['name' => $brand->name]) }}">
    </a>

    <p class="brands__text">{{ __('app.repair_of_name_coffee_machines', ['name' => $brand->name]) }}</p>
</div>
