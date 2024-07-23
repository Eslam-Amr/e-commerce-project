<?php

namespace App\Http\Controllers\Admin\AdminControlOnUser;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index(){
        $users = User::paginate();
        // $user = user::find(4);
        // dd($user->profits->sum('profit'));
        return view('admin.user.index',get_defined_vars());
    }
    public function destroy(User $user) {
$user->delete();
return redirect()->back()->with('success','user deleted successfully');
    }

    public function block(User $user) {
$user->block =1;
$user->save();
return redirect()->back()->with('success','user blocked successfully');
    }
    public function unblock(User $user) {
$user->block =0;
$user->save();
return redirect()->back()->with('success','user unblocked successfully');
    }
}
