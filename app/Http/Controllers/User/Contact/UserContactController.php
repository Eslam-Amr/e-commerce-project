<?php

namespace App\Http\Controllers\User\Contact;

use App\Http\Requests\StoreContactRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Interface\User\Contact\ContactInterface;
use App\Models\Contact;

class UserContactController extends Controller
{
    private $contactRepository;

    public function __construct(ContactInterface $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }
    public function index(){
        return view('user.main.contact.index');
    }
    public function store(StoreContactRequest $request){

        // Contact::create($request->validated());
        $this->contactRepository->createContact($request);
return redirect()->back()->with('success','Message Sent Successfully');
    }
}
