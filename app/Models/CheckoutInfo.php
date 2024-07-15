<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckoutInfo extends Model
{
    use HasFactory;
    protected $fillable =[
'first_name',
'last_name',
'company_name',
'country',
'street_address',
'appartment_info',
'city',
'state',
'phone',
'email',
'Order_notes',
    ];
}
