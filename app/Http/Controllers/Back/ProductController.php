<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//MODELs
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        return view('back.product.index');
    }
}
