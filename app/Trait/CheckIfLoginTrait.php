<?php

namespace App\Trait;

use Illuminate\Support\Facades\Auth;

trait CheckIfLoginTrait
{
    public function checkIfLogin(){
        if (!Auth::check())
        return redirect()->route('login')->with(['error' => 'please login']);
    }
}
