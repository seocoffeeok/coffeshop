<?php

namespace App\Nova\Actions;

use Domain\ContactForm\Models\ContactForm;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;

class ContactFormResolveAction extends Action
{
    use InteractsWithQueue, Queueable;

    public function handle(ActionFields $fields, Collection $models)
    {
        $models->each(fn (ContactForm $contactForm) => $contactForm->update(['is_resolved' => true]));
    }

    public function fields(): array
    {
        return [];
    }
}
