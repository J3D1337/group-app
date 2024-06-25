<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Models\AdminModel;
use Models\UserModel;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (auth()->user()->role !== $role) {
            return redirect('/');
        }

        return $next($request);
    }
}
