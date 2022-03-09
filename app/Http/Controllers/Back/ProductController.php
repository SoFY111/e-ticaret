<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//MODELs
use App\Models\Product;
use App\Models\Publisher;
use App\Models\Kind;

class ProductController extends Controller
{
    public function index(){
        return view('back.product.index');
    }

    public function storeProductIndex(){

        $publishers = Publisher::where('isDeleted', 0)->get();
        $kinds = Kind::where('isDeleted', 0)->get();

        return view('back.product.store', compact('publishers', 'kinds'));
    }
}
