<?php

namespace App\Http\Controllers\Client\Review;

use App\Http\Controllers\Controller;
use Domain\Review\Actions\ReviewCreateAction;
use Domain\Review\Models\Reviewer;
use Domain\Review\Requests\ReviewCreateRequest;
use Illuminate\Http\RedirectResponse;

class ReviewCreateController extends Controller
{
    public function __invoke(ReviewCreateRequest $request, ReviewCreateAction $action): RedirectResponse
    {
        $reviewer = $this->findOrCreateReviewer($request);

        $action->handle(
            $request->getData($reviewer->id),
        );

        return redirect()
            ->back();
    }

    private function findOrCreateReviewer(ReviewCreateRequest $request): Reviewer
    {
        /** @var Reviewer $reviewer */
        $reviewer = Reviewer::query()
            ->firstOrCreate([
                'email' => $request->get('email'),
            ], [
                'name' => $request->get('name'),
                'email' => $request->get('email'),
            ]);

        return $reviewer;
    }
}
