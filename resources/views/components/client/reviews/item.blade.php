@props(['review'])

<div class="master-reviews__wrapper">
    <div class="master-reviews__column">
        <div class="master-reviews__header">
            <p class="master-reviews__author">{{ $review->reviewer->name }}</p>
            <ul class="master-reviews__rating">
                @for($i = 1; $i <= 5; $i++)
                    <li class="master-reviews__star @if($i <= $review->rate) _icon-star-2 @else _icon-star-1 @endif"></li>
                @endfor
            </ul>
        </div>
        <div class="master-reviews__date">
            {{ $review->updated_at->format('d.m.Y') }}
        </div>
    </div>

    <div  data-showmore class="master-reviews__column">
        <p data-showmore-content="130" class="master-reviews__content">
            {!! $review->body !!}
        </p>

        @if(strlen($review->body) > 130)
            <button hidden data-showmore-button type="button" class="master-reviews__more">
                <span class="showmore__icon _icon-arrow">{!! __('app.read_more') !!}</span>
                <span class="showmore__icon showmore__icon-down _icon-arrow">{{ __('app.collapse') }}</span>
            </button>
        @endif
    </div>

    <div class="master-reviews__column master-reviews__date">
        {{ $review->updated_at->format('d.m.Y') }}
    </div>
</div>
