<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;

class AdminController extends Controller
{

    public function showAdmin()
    {

        return view('admin.dashboard');

    }


    public function show(string $id)
    {
        $admin = AdminModel::findOrFail($id);
        $name = $admin->username;
        return response()->json($name);
    }
}

