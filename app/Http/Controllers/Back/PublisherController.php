<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//MODELs
use App\Models\Publisher;

class PublisherController extends Controller
{
    public function index(){
        return view('back.publisher');
    }

    public function storePublisher(Request $request){
        Publisher::insert([
            'name' => $request->publisherName,
        ]);

        return redirect()->back();
    }
}
