<div class="spollers-footer__body">
    <nav data-showmore="items" data-showmore-media="767.98,min" class="menu-footer">
        <ul data-showmore-content="{{ $viewCount }}" class="menu-footer__list menu-footer__list-spollers">
            @foreach($districts as $district)
                <li class="menu-footer__item">
                    <a href="{{ $district['url'] }}" class="menu-footer__link">{{ $district['name'] }}</a>
                </li>
            @endforeach
        </ul>

        @if($viewCount < $districts->count())
            <button hidden data-showmore-button type="button" class="menu-footer__button">
                <span>{{ __('app.count_more', ['count' => $viewCount]) }}...</span>
                <span>{{ __('app.collapse') }}</span>
            </button>
        @endif
    </nav>
</div>
