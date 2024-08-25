<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;
use App\Interface\Admin\Contact\AdminContactInterface;
use App\Models\Contact;
use App\Repository\User\Contact\ContactRepository;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    private $contactRepository;

    public function __construct(AdminContactInterface $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }
    public function index(){
        // $contacts=Contact::where('read',0)->paginate();
        $contacts=$this->contactRepository->getUnReadContactPaginate();
        return view('admin.contact.index',get_defined_vars());
    }
    public function show(Contact $contact){
        // dd($contact);
        return view('admin.contact.show',get_defined_vars());
    }
    public function update(Contact $contact){
        // $contact->read=1;
        // $contact->save();
        $this->contactRepository->markContactAsRead($contact);
        return redirect()->route('admin.contact.index')->with('success','readed successfully');
    }
    public function destroy(Contact $contact){
        // $contact->delete();
        $this->contactRepository->destroyContact($contact);
        // $contact->save();
        return redirect()->route('admin.contact.all')->with('success','readed successfully');
    }
    public function displayAll(){
        // $contacts=Contact::paginate();
        $contacts=$this->contactRepository->getContactPaginate();
        return view('admin.contact.contact',get_defined_vars());
    }
}
