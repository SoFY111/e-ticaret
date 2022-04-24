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

    public function changeUserActivePassiveIndex()
    {
        $passiveUsers = User::where('isDeleted', 1)->get();
        $activeUsers = User::where('isDeleted', 0)->get();

        return view('back.superAdmin.changeUserActivePassive', compact('passiveUsers', 'activeUsers'));
    }

    public function changeUserActivePassive(Request $request)
    {
        if($request->isDeleted === 1){
            $passive = User::findOrFail($request->selectedPassiveUser);
            $passive->isDeleted = 0;
            $passive->save();
            flash('Success message')->success();
            return redirect()->back();
        }
        elseif($request->isDeleted === 0){
            $active = User::findOrFail($request->selectedActiveUser);
            $active->isDeleted = 1;
            $active->save();
            flash('Success message')->success();
            return redirect()->back();
        }
        flash('İşlem gerçekleştirilemedi.')->error();
        return redirect()->back();
    }
}
