<?php

namespace App\Http\Controllers\User\Contact;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserContactController extends Controller
{
    public function index(){
        return view('user.main.contact.index');
    }
}
