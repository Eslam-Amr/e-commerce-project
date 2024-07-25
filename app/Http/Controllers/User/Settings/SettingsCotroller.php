<?php

namespace App\Http\Controllers\User\Settings;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class SettingsCotroller extends Controller
{
    public function index(){
        $user=auth()->user();
        return view('user.main.settings.index',get_defined_vars());
    }
}
