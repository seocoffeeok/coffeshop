<?php

namespace Domain\Staff\Models;

use Domain\Staff\Models\Concerns\HasBreadcrumbs;
use Domain\Staff\Models\Concerns\HasMediaCollections;
use Domain\Staff\Models\Concerns\HasRoutable;
use Illuminate\Database\Eloquent\Model;
use Melogail\LaravelReviews\Traits\Reviewable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Translatable\HasTranslations;

class Staff extends Model implements HasMedia
{
    use HasTranslations;
    use HasMediaCollections;
    use HasRoutable;
    use HasBreadcrumbs;
    use Reviewable;

    public array $translatable = [
        'name',
        'regalia',
        'description',
        'merit',
        'slug',
    ];

    protected $guarded = [];
}
