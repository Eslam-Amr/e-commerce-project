<?php

namespace App\Interface\Admin\Contact;

use App\Models\Contact;

interface AdminContactInterface
{
    public function getUnReadContactPaginate();
    public function getContactPaginate();
    public function destroyContact(Contact $contact);
    public function markContactAsRead(Contact $contact);
}
