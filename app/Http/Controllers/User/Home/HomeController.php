<?php

namespace App\Http\Controllers\User\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // public function index(){
    //     return view('user.main.home.index');
    // }
    public function __invoke(){
        // $guard = Auth::getDefaultDriver();

        // Dump and die the guard
        // dd(Auth::guard('seller')->user());
        // dd($guard,auth()->guard('admin')->user());
        return view('user.main.home.index');
    }
}
