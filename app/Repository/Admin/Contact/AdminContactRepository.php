<?php

namespace App\Repository\Admin\Contact;
use App\Interface\Admin\Contact\AdminContactInterface;
use App\Models\Contact;

class AdminContactRepository implements AdminContactInterface
{
    public function getUnReadContactPaginate(){
return Contact::where('read',0)->paginate();
    }
    public function markContactAsRead(Contact $contact){
        $contact->read=1;
        $contact->save();
    }
    public function destroyContact(Contact $contact){

        $contact->delete();
    }
    public function getContactPaginate(){
        return Contact::paginate();
    }
}
