@if($reviewWidget = settings('reviews_widget_html'))
    <div id="otzyvy" class="reviews">
        <div class="reviews__container">
            <h3 class="reviews__title">
                {{ __('app.reviews') }}
            </h3>
            <div class="reviews__body">
                {!! settings('reviews_widget_html') !!}
            </div>
        </div>
    </div>
@endif
