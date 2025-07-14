<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckUserStatus
{
    public function handle(Request $request, Closure $next)
    {
        $userId = $request->input('user_id'); // e.g., from query string or form

        $user = DB::select('SELECT * FROM users WHERE id = ?', [$userId]);

        if (empty($user)) {
            return response('User not found', 404);
        }

        if ($user[0]->status !== 'active') {
            return response('Access denied. Your account is inactive.', 403);
        }

        return $next($request); 
    }
}
