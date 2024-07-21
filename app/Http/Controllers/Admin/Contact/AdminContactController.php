<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    public function index(){
        $contacts=Contact::where('read',0)->paginate();
        return view('admin.contact.index',get_defined_vars());
    }
    public function show(Contact $contact){
        // dd($contact);
        return view('admin.contact.show',get_defined_vars());
    }
    public function update(Contact $contact){
        $contact->read=1;
        $contact->save();
        return redirect()->route('admin.contact.index')->with('success','readed successfully');
    }
    public function destroy(Contact $contact){
        $contact->delete();
        // $contact->save();
        return redirect()->route('admin.contact.all')->with('success','readed successfully');
    }
    public function displayAll(){
        $contacts=Contact::paginate();
        return view('admin.contact.contact',get_defined_vars());
    }
}
