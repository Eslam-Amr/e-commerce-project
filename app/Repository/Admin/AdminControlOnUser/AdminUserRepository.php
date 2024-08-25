<?php

namespace App\Repository\Admin\AdminControlOnUser;

use App\Interface\Admin\AdminControlOnUser\AdminUserInterface;
use App\Models\User;

class AdminUserRepository implements AdminUserInterface
{

    public function getUserPaginate(){
        return User::paginate();
    }
    public function userDestroy(User $user){
        $user->delete();
    }
    public function userBlock(User $user){
        $user->block =1;
        $user->save();
    }
    public function userUnBlock(User $user){
        $user->block =0;
        $user->save();
    }

}
