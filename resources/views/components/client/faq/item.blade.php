@props(['questionAnswer'])

<div data-spollers class="answers__spollers">
    <div class="answers__item">
        <button type="button" data-spoller class="answers__title">
            <h4 class="content__title-4">{{ $questionAnswer->question }}</h4>
            <span class="_icon-arrow"></span>
        </button>
        <p class="answers__text">
            {{ $questionAnswer->answer }}
        </p>
    </div>
</div>
