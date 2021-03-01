<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function list()
    {
        return view('user.list', [
            'users' => User::all()
        ]);
    }

    public function show($id)
    {
        return view('user.show', [
            'user' => User::findOrFail($id)
        ]);
    }
}
