<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $products = Product::orderBy('created_at')->take(8)->get();

        return view('home.index',[
            'products' => $products
        ]);
    }
}
