<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//MODELs
use App\Models\Slider;

class MainController extends Controller
{
    public function index(){
        $sliderData = Slider::select('sliderMainText', 'sliderSubText', 'sliderButtonLink', 'photoPath')->get();


        return view('front.index', compact('sliderData'));
    }
}
