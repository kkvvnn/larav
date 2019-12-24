<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __invoke($id) {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }
}
