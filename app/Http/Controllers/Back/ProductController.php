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

    public function storeProduct(Request $request){

        $request->validate([
            'gameName' => 'required',
            'publisher' => 'required',
            'kind' => 'required',
            'price' => 'required',
            'description' => 'required',
            'systemRequirementsText' => 'required',
            'images' => 'required|image|mimes:jpeg,jpg,png|max:10000',
        ]);

        if(!$request->isPc && !$request->isPs && !$request->isXbox){
            error_log('platform yok');
            flash('Lütfen en az bir <b>platform</b> seçiniz.')->error();
            return redirect()->back()->withInput();
        }

        $isPc = false;
        $isPs = false;
        $isXbox = false;

        if ($request->isPc) $isPc = true;
        if ($request->isPs) $isPs = true;
        if ($request->isXbox) $isXbox = true;




        return json_encode($request->post());
    }
}
