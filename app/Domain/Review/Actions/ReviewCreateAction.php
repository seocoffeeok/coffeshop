<?php

namespace Domain\Review\Actions;

use Domain\Review\Data\ReviewCreateData;
use Melogail\LaravelReviews\Models\Review;

class ReviewCreateAction
{
    public function handle(ReviewCreateData $data): Review
    {
        /** @var Review $review */
        $review = Review::query()
            ->create($data->all());

        return $review;
    }
}
