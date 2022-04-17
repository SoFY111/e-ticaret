<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

//MODELs
use App\Models\Slider;
use App\Models\User;

class MainController extends Controller
{
    public function index(){
        $sliderData = Slider::select('sliderMainText', 'sliderSubText', 'sliderButtonLink', 'photoPath')->get();


        return view('front.index', compact('sliderData'));
    }

    public function profile(){
        return view('front.profile');
    }

    public function update(Request $request,$id)
    {
        $user = User::find($id);

        if($request['newpass1'] == $request['newpass2'])
        {
        $user->name = $request['name'];
        $user->surname = $request['surname'];
        $user->email = $request['email'];
        $user->password = Hash::make($request['newpass1']);

        /*
        if($request->has('newProfilePhoto')){
            $fileNameStartWith = auth()->user()->id . '_' . strtolower(auth()->user()->name) . '-' . strtolower(auth()->user()->surname) . '_';
            $fileName = $fileNameStartWith . 'newProfilePhoto' . '_' . date_timestamp_get(date_create()) . '.' . $request->newProfilePhoto->extension();
            $fileNameWithUpload = 'images/uploads/userProfilePhotos/' . $fileName;
            $request->newProfilePhoto->move(public_path('images/uploads/userProfilePhotos'), $fileNameWithUpload);
            $user->profilePhoto = $fileName;
        }*/

        $user->save();

        flash('Bilgileriniz başarıyla değiştirildi.')->success();
        return redirect()->route('front.profile');
    }
    else if($request['newpass1'] != $request['newpass2'])
    {
        flash('Yeni şifreler birbiriyle eşleşmedi. Tekrar Deneyin !')->error();
        return redirect()->route('front.profile');
    }
    }
}
