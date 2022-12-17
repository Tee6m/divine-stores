<?php

namespace App\Http\Controllers;
use App\Models\ProfilePicture;

use Illuminate\Http\Request;

class ProfilePictureController extends Controller
{
    public function profile_pic(Request $request){
        $profiles= new ProfilePicture();
        if ($request->hasFile('profile_picture')) {
             //get unique name for file
            $picName = 'FSP'.uniqid().time().'.'.$request->profile_picture->getClientOriginalExtension();
             //upload the file
            $request->profile_picture->move(public_path().'/upload/', $picName);
             //save path and name in database
            $profiles->profile_picture = 'upload/'.$picName;
        }

        $profiles -> save();
        return redirect()->back();
    }

    public function profile_pic_update(Request $request, $id){
        $profiles= ProfilePicture::findOrFail(5);
        if ($request->hasFile('profile_picture')) {
             //get unique name for file
            $picName = 'FSP'.uniqid().time().'.'.$request->profile_picture->getClientOriginalExtension();
             //upload the file
            $request->profile_picture->move(public_path().'/upload/', $picName);
             //save path and name in database
            $profiles->profile_picture = 'upload/'.$picName;
        }

        $profiles -> save();
        return redirect()->back();
    }

    
}
