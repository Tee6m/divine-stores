<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create(){

        return view('pages.contact');
    }
    public function create2(){

        return view('pages.contact2');
    }

    public function store(Request $request){
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone_number = $request->phone_number;
        $contact->message = $request->message;

        $contact->save();

        Alert::success('Success','Message Sent');

        return redirect()->back()->with('message', 'Message Sent');
    }
}
