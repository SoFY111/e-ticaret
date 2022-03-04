<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function changeUserAuthorityIndex()
    {
        $normalUsers = User::where('type', 'user')->get();
        $admins = User::where('type', 'admin')->get();

        return json_encode($normalUsers);

        return view('back.superAdmin.changeUserAuthority', compact('normalUsers', 'admins'));
    }
}
