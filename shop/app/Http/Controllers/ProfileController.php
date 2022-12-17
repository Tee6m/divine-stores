<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    function admin_update(Request $request){
        $user = auth()->user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->address = $request->address;
        $user->town = $request->town; 
        $user->state = $request->state;
        $user->country = $request->country;
        $user->zipcode = $request->zipcode;

        $user->save();
        return redirect()-> back()->with('update2', 'Updated Sucessfully');
    }



    // function update2(Request $request){
    //     $user = auth()->user();
    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->phone_number = $request->phone_number;

    //     $user->save();

    //     Alert::success('Success','Profile Updated');

    //     return redirect()-> back()->with('update2', 'Updated Sucessfully');
    // }



    function update(Request $request)
    {
        $user = auth()->user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->address = $request->address;
        $user->town = $request->town; 
        $user->state = $request->state;
        $user->country = $request->country;
        $user->zipcode = $request->zipcode;

        $user->save();

        Alert::success('Success','Updated Sucesssfuly');

        return redirect()-> back()->with('update', 'updated Sucessfully');
    }

}