<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//MODELs
use App\Models\Kind;

class KindController extends Controller
{
    public function index(){

        $activeKinds =Kind::where('isDeleted', '=', 0)->get();


        return view('back.kind', compact('activeKinds'));
    }
}
