<?php

namespace App\Providers;

use Domain\Review\Models\Reviewer;
use Domain\Review\Polices\ReviewerPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        //
    ];

    public function boot()
    {
        $this->registerPolicies();
    }
}
