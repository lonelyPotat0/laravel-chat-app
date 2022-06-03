<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login () {
        return view('auth.login');
    }

    public function signup () {
        return view('auth.signup');
    }

    public function createUser (Request $request) {
        // dd($request->password_confirmation);
        $this->validate($request, [
            'username' => 'required|max:40',
            'name' => 'required|max:40',
            'password' => 'required|confirmed|min:3',
        ]
        );
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);
        // dd($request->username);
        return redirect()->route('home');
    }

    public function loginUser () {

    }
}
