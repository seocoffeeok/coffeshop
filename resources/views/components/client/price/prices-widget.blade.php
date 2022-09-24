<div id="uslugi" class="services">
    <div class="services__container">
        <h2 class="services__title">{{ __('app.always_repair_types') }}</h2>
        <p class="services__text">{{ __('app.always_repair_types_description') }}</p>
        <div class="services__body">
            @foreach($priceGroups as $group)
                <div data-showmore="items" class="services__column">
                    <span class="services__title-secondary">{{ $group->name }}</span>

                    <ul data-showmore-content="5" class="services__list">
                        @foreach($group->prices as $price)
                            <li>
                                <span class="services__link">{{ $price->name }}</span>
                            </li>
                        @endforeach
                    </ul>

                    <div class="services__row">
                        <button hidden data-showmore-button type="button" class="services__more">
                            <span class="showmore__icon _icon-arrow">+{{ __('app.count_more_static') }}</span>
                            <span class="showmore__icon showmore__icon-down _icon-arrow">{{ __('app.collapse') }}</span>
                        </button>

                        <div class="services__price">{{ __('app.after_price_uah', ['price' => $group->prices->min('price')]) }}.</div>
                    </div>

                </div>
            @endforeach
        </div>

        <a href="{{ route('prices') }}" class="services__all-services btn btn-w">{{ __('app.all_services_and_prices') }}</a>
    </div>
</div>
