<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Admin extends Authenticatable
{
    use HasFactory, Notifiable;
protected $table = 'users';
protected static function boot(){
    parent::boot();
    static::addGlobalScope('admin',function(Builder $bulder){
        $bulder->where('role','admin');
    });
}
}
