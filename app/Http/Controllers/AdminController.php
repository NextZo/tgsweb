<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin/index');
    }

    public function users()
    {
        $data = [
            'users' => User::all(),
        ];
        return view('admin/users', $data);
    }

    public function user(User $user)
    {
        return view('admin/user', ['user' => $user]);
    }

    public function postUser(User $user, Request $request)
    {
        $user->username = $request->username;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->save();
        return redirect('/dashboard/users');
    }

    public function deleteUser(User $user)
    {
        $user->delete();
        return redirect('/dashboard/users');
    }
}
