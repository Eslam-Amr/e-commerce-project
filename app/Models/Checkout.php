<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;
    protected $fillable=['quantity' ,'product_id', 'checkout_id','total','user_id','checkout_info_id'];
    public function products()
    {
        return $this->belongsToMany(Product::class, 'checkout_products')
                    ->withPivot('quantity')
                    ->withTimestamps();
    }
}
