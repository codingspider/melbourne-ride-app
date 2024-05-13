<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\ActivityLog;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LogUserActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = auth()->user();
        $description = 'User ' . $user->full_name . ' accessed ' . $request->getRequestUri();
        ActivityLog::create([
            'user_id' => $user->id,
            'description' => $description,
            'ip_address' => $request->ip()
        ]);

        return $next($request);
    }
}
