<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Seller extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = 'users';
    public function products(){
        return $this->hasMany(Product::class);
    }
    protected static function boot(){
        parent::boot();
        static::addGlobalScope('seller',function(Builder $bulder){
            $bulder->where('role','seller');
        });
    }
}
