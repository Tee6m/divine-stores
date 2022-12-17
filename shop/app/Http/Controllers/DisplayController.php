<?php

namespace App\Http\Controllers;
use App\Models\ProfilePicture;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use App\Models\User;
use App\Models\Display;
use App\Models\Logoo;
use App\Models\Shopname;
use App\Models\Slidertext;
use Illuminate\Http\Request;

class DisplayController extends Controller
{
    //

    public function view(){
        $shopname = Shopname::all();
        $texts = Slidertext::all();
        $logo = Logoo::all();
        $display= Display::all();
        $profile = ProfilePicture::all();
        return view('pages.home_display', compact('profile', 'display', 'logo', 'shopname', 'texts'));
    }

    public function logo(Request $request){
        $logo = Logoo::findOrFail(2);
        if ($request->hasFile('shoplogo')) {
             //get unique name for file
            $picName = 'LGG'.uniqid().time().'.'.$request->shop_logo->getClientOriginalExtension();
             //upload the file
            $request->shop_logo->move(public_path().'/uploads/', $picName);
             //save path and name in database
            $logo->shop_logo = 'uploads/'.$picName;
        } else {
            $logo->shop_logo = 'Logo Error..';

        }

        $logo->save();
        return redirect()->back();
    }

    public function slider(){
        
    }

    public function name(Request $request){
        $shopname = Shopname::findOrFail(3);
        $shopname->shopname = $request->site_name;

        $shopname-> save();
        return redirect()->back()->with('site', 'Name Changed sucessfully');

    }

    public function slider_pic(){
        
    }

    public function slider_text(Request $request){
        $text = Slidertext::findOrFail(1);
        $text->text1 = $request->text1;
        $text->text2 = $request->text2;

        $text-> save();
        return redirect()->back()->with('slider', 'Slider Texts Updated');
    }
}
