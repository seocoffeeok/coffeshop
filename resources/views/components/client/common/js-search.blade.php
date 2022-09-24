@props(['class'])

<div class="{{ $class ?? 'brands__search' }} search">
    <input x-model="searchQuery" x-on:change="search" autocomplete="off" type="text" data-error="{{ __('app.error') }}" placeholder="{{ __('app.how_search') }}" class="search__input" value="{{ request()->get('q') }}">
    <button type="submit" class="search__icon _icon-search"></button>
</div>
