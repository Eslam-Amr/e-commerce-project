<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $validator = $request->validated();
        if (Auth::guard("admin")->attempt($validator)||Auth::guard("seller")->attempt($validator))
            return redirect()->route('admin.index');
        return back()->with('message', 'invalid email or password');
    }
    public function adminLogout()
    {
        if (Auth::guard("admin"))
        Auth::logout();
else
        Auth::logout();



        return redirect('/');
    }
}
