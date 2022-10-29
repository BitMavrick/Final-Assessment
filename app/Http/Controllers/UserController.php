<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        $role = Role::all();
        //dd($role);
        return view('backend.index', [
            'users' => $users,
            'role' => $role,
        ]);
    }
}