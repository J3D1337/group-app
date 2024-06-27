<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
//if admin@admin.com is loged in redirect do admin.dashboard if not redirect do users.dashboard
    public function dashboard()
    {
        if (auth()->user()->role == 'admin') {
            return view('admin.dashboard');
        } else {
            return view('users.dashboard');
        }
 }
}

