<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProfilePicture;
use App\Models\Shopname;
use App\Models\Slidertext;
use App\Models\User;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profile;

class PageController extends Controller
{
    function home(){

        $categories = Category::all();
        $shopName = Shopname::all();
        $slider_texts = Slidertext::all();
        $display_categories=Category::all()->take(3); 
        $products = Product::orderBy('updated_at', 'desc')->paginate(6);
        return view('welcome',  compact('categories', 'products', 'display_categories', 'shopName', 'slider_texts'));
    }

    function admin(){
        return view('pages.admin');
    }

    function profile(){
        $users = User::all();
        $profile = ProfilePicture::all();
        return view('pages.profile', compact('users','profile'));
    }

    function search(Request $request){
        // $search = request()->query('search');
        if ($request->search) {
            $search_products = Product::where('name', 'LIKE', '%'.$request->search.'%')->paginate(3);
            //return response()->json($search_products);
            return view('pages.search', compact('search_products'));
        } else{
            // $search_products =  Product::orderBy('updated_at', 'desc')->paginate(6);
            return redirect()->back();
        }

    }

    function about(){
        return view('pages.about');
    }

    function autocomplete(Request $request){
        

        $filter_data = Product::select('name')
                                ->where('name', 'LIKE', "%{$request->terms}%")->get();

        return Response()->json($filter_data);

    }
}
