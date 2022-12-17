<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\ProfilePicture;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use App\Models\User;

use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpKernel\Profiler\Profile;

class AccountController extends Controller
{
    function index(){
        if(auth()->user()->admin){
	
         $user =auth()->user();
         $profile = ProfilePicture::all();
        return view('accounts.index', compact('user', 'profile'));
        }else{
            return redirect()->route('home') ;
        }
    }

    function index2(){
        if(auth()->user()){
	
         $user =auth()->user();
        return view('accounts.index2', compact('user'));
        }else{
            return redirect()->route('home') ;
        }
    }

    function change_password(Request $request) {
        $old_pass = $request->old_password;
        $new_pass = $request->new_password;
        $confirm_pass = $request->confirm_password;

        $user =auth()->user();

        $isValid = password_verify($old_pass, $user->password);
        if($isValid == false) {
          

            Alert::Warning('Somthing is wrong','Invalid old Password');
            return redirect()-> back()->with('error2', 'Invalid Old Password');
        }
        if($new_pass != $confirm_pass) {
        
            Alert::error('Error','Password Do Not Match');
            return redirect()-> back()->with('error', 'Password Do Not Match');
        }
        $user -> password = bcrypt($new_pass);
        $user -> save();
 
        Alert::success('Success','Password Changed Succesfully');
        return redirect()-> back()->with('message', 'Password Changed Succesfully');
    }

    function dashboard(){

        $total_product=Product::all()->count();
        $total_categories=Category::all()->count();
        $total_user=User::all()->count();
        $pending_order=Order::where('status', '=', 'pending')->get()->count();
        $paid_order=Order::where('status', '=', 'paid')->get()->count();
        $total_order=Order::all()->count();

        $profile = ProfilePicture::all();
        return view('pages.dashboard', compact('profile','total_product','total_user',
        'total_categories', 'pending_order', 'total_order'));
    }

    function inbox(){
        

        $contacts=Contact::orderBy('updated_at', 'desc')->get();
        $profile = ProfilePicture::all();
        return view('pages.inbox', compact('contacts','profile'));
    }
 
}
