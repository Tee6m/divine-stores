<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Display;
use App\Models\Product;
use App\Models\Shopname;
use App\Models\Slidertext;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $categories = Category::all();
        $shopName = Shopname::all();
        $slider_texts = Slidertext::all();
        $display_categories=Category::all()->take(3); 
        $products = Product::orderBy('updated_at', 'desc')->paginate(6);
      //  $display = Display::all();
        return view('welcome', compact('categories', 'products', 'display_categories', 'shopName', 'slider_texts'));
    }
}
