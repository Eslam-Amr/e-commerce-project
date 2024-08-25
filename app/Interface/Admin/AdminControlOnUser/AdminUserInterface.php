<?php

namespace App\Interface\Admin\AdminControlOnUser;

use App\Models\User;

interface AdminUserInterface
{
    public function getUserPaginate();
    public function userDestroy(User $user);
    public function userBlock(User $user);
    public function userUnBlock(User $user);
}
