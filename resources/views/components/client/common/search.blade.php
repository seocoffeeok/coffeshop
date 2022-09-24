@props(['url' => null, 'key' => 'q'])

<form action="{{ $url ?? request()->url() }}" class="brands__search search">
    <input autocomplete="off" type="text" name="{{ $key }}" data-error="{{ __('app.error') }}" placeholder="{{ __('app.how_search') }}" class="search__input" data-placeholder="{{ __('app.search') }}" value="{{ request()->get($key) }}">
    <button type="submit" class="search__icon _icon-search"></button>
</form>
