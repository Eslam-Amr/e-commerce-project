<?php

namespace App\Repository\User\Seller;

use App\Interface\User\Seller\SellerRequestInterface;
use App\Models\SellerRequest;

class SellerRequestRepository implements SellerRequestInterface
{
        public function CreateSellerRequest($email){
            SellerRequest::create(['user_id' => auth()->user()->id, 'email' => $email]);

        }

}
