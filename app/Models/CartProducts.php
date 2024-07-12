<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CartProducts extends Model
{
    use HasFactory;
    protected $table = 'cart_products';

    protected $fillable = ['cart_id', 'product_id', 'quantity'];
}
