<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;

class HashidsDecode
{
    public function handle(Request $request, Closure $next, string $field)
    {
        /** @var \Illuminate\Routing\Route */
        $route = $request->route();

        $hash = $route->parameter($field);

        $route->setParameter(
            $field,
            Hashids::decode($hash)[0] ?? null,
        );

        return $next($request);
    }
}
