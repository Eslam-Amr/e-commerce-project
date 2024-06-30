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
        // dd($validator);
        // dd(auth()->guard('admin')->user());
        if (Auth::guard("admin")->attempt($validator))
            return redirect()->route('home');
        if (Auth::guard("seller")->attempt($validator))
            return redirect()->route('home');
        return back()->with('message', 'invalid email or password');
    }
}
