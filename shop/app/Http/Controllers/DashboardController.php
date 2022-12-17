<?php

namespace App\Http\Controllers;

use App\Models\ProfilePicture;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function total_users(){
        $users = User::all();
        $profile = ProfilePicture::all();
        return view('pages/DashboardContent/total_users', compact('profile','users'));
    }

    // public function total_categories(){
    //     $profile = ProfilePicture::all();
    //     return view('pages/DashboardContent/total_categories', compact('profile'));
    // }

    // public function total_products(){
    //     $products = Product::all();
    //     $profile = ProfilePicture::all();
    //     return view('pages/DashboardContent/total_products', compact('profile'));
    // }

    public function total_orders(){
        $users = User::all();
        $orders = Order::all();
        $profile = ProfilePicture::all();
        return view('pages/DashboardContent/total_orders', compact('profile','orders','users'));
    }

    public function pending_orders(){
        $users = User::all();
        $orders = Order::all();
        $profile = ProfilePicture::all();
        return view('pages/DashboardContent/pending_orders', compact('profile','orders','users'));
    }

    public function completed_orders(){
        $profile = ProfilePicture::all();
        return view('pages/DashboardContent/completed_orders', compact('profile'));
    }
}
