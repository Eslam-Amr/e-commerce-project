<?php

namespace App\Http\Controllers\Admin\AdminControlOnUser;

use App\Http\Controllers\Controller;
use App\Interface\Admin\AdminControlOnUser\AdminUserInterface;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    private $adminUserRepository;

    public function __construct(AdminUserInterface $adminUserRepository)
    {
        $this->adminUserRepository = $adminUserRepository;
    }
    public function index(){
       // $users = User::paginate();
        $users = $this->adminUserRepository->getUserPaginate();
        // $user = user::find(4);
        // dd($user->profits->sum('profit'));
        return view('admin.user.index',get_defined_vars());
    }
    public function destroy(User $user) {
// $user->delete();
$this->adminUserRepository->userDestroy($user);
return redirect()->back()->with('success','user deleted successfully');
}

public function block(User $user) {
    $this->adminUserRepository->userBlock($user);
    //     $user->block =1;
    // $user->save();
    return redirect()->back()->with('success','user blocked successfully');
}
public function unblock(User $user) {
        $this->adminUserRepository->userUnBlock($user);
// $user->block =0;
// $user->save();
return redirect()->back()->with('success','user unblocked successfully');
    }
}
