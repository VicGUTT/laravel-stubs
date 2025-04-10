<?php

declare(strict_types=1);

namespace ___LaravelStubs___namespace;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;

final class ___LaravelStubs___class
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response|Illuminate\Http\JsonResponse|RedirectResponse)  $next
     */
    public function handle(Request $request, Closure $next): Response|JsonResponse|RedirectResponse
    {
        return $next($request);
    }
}
