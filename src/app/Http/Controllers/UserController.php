<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function view()
    {
        return view('users.index', ['users' => User::all()]);
    }


    public function user($id)
    {
        return view('users.user', ['user' => DB::table('users')->find($id)]);
    }
}
