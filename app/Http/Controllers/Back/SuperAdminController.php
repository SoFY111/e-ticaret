<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//MODELs
use App\Models\User;

class SuperAdminController extends Controller
{
    public function changeUserAuthorityIndex()
    {
        $normalUsers = User::where('type', 'user')->get();
        $admins = User::where('type', 'admin')->get();

        return view('back.superAdmin.changeUserAuthority', compact('normalUsers', 'admins'));
    }

    public function changeUserAuthority(Request $request)
    {
        if($request->type === 'user'){
            $user = User::findOrFail($request->selectedNormalUser);
            $user->type = 'admin';
            $user->save();
            flash('Success message')->success();
            return redirect()->back();
        }
        elseif($request->type === 'admin'){
            $admin = User::findOrFail($request->selectedAdmin);
            $admin->type = 'user';
            $admin->save();
            flash('Success message')->success();
            return redirect()->back();
        }
        flash('İşlem gerçekleştirilemedi.')->error();
        return redirect()->back();
    }
}
