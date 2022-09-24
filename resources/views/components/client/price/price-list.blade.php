<div data-showmore="items" class="price__block" style="margin-top: 1.5rem">
    <div data-showmore-content="4" class="price__content" x-ref="searchBlocksDiv">
        @foreach($priceGroups as $group)
            <span class="price__title-secondary">{{ $group->name }}</span>

            <table class="price__table price__table2">
                <thead class="price__thead">
                <tr class="price__table-title">
                    <th>{{ __('app.service') }}</th>
                    <th>{{ __('app.price') }}</th>
                </tr>
                </thead>

                <tbody class="price__tbody">
                    @foreach($group->prices as $price)
                        <tr class="price__table-row" data-name="{{ $price->name }}">
                            <td>{{ $price->name }} {{ $price->is_optional ?: __('app.optional_price') }}</td>
                            <td>{{ $price->price }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endforeach

        <p class="price__text-bottom" style="margin-top: 1.5rem">
            {{ __('app.price_varies_text') }}<br>
            {{ __('app.optional_price_test') }}
        </p>
    </div>

    <button hidden data-showmore-button type="button" class="price__button btn btn-w" style="margin-top: 1.5rem">
        <span>{{ __('app.expand') }}</span>
        <span>{{ __('app.collapse') }}</span>
    </button>
</div>
