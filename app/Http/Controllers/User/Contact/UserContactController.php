<?php

namespace App\Http\Controllers\User\Contact;

use App\Http\Requests\StoreContactRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;

class UserContactController extends Controller
{
    public function index(){
        return view('user.main.contact.index');
    }
    public function store(StoreContactRequest $request){

        Contact::create($request->validated());
return redirect()->back()->with('success','Message Sent Successfully');
    }
}
