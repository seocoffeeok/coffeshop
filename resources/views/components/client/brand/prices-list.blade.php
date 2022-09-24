@props(['prices'])

@php($pricesChunks = $prices->chunk(4))

<div data-showmore="items" class="price__block">
    <div data-showmore-content="2" class="price__content">
        <table class="price__table">
            <thead class="price__thead">
                <tr class="price__table-title">
                    <th>{{ __('app.service') }}</th>
                    <th>{{ __('app.price') }}</th>
                </tr>
            </thead>
        </table>

        @foreach($pricesChunks as $prices)
            <table class="price__table">
                <tbody class="price__tbody">
                    @foreach($prices as $price)
                        <tr class="price__table-row">
                            <td>{{ $price->name }}</td>
                            <td>{{ __('app.from_uah', ['uah' => $price->price]) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endforeach
    </div>

    @if($pricesChunks->count() > 1)
        <button hidden data-showmore-button type="button"
                class="price__button btn btn-w"
                style="margin-top: 2rem">
            <span>{{ __('app.expand') }}</span>
            <span>{{ __('app.collapse') }}</span>
        </button>
    @endif
</div>
