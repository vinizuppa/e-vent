<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function list()
    {
        return view('admin.user.list', [
            'users' => User::all()
        ]);
    }

    public function show($id)
    {
        return view('admin.user.show', [
            'user' => User::findOrFail($id)
        ]);
    }
}
