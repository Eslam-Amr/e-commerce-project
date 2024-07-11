<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = ['user_id'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'cart_products')
                    ->withPivot('quantity')
                    ->withTimestamps();
    }
}
