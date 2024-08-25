<?php

namespace App\Repository\User\Contact;
use App\Interface\User\Contact\ContactInterface;
use App\Models\Contact;

class  ContactRepository implements ContactInterface
{
    public function createContact($request){
        Contact::create($request->validated());
    }
}
