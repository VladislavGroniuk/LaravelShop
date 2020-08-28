<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        return view('cart.index');
    }

    public function addToCart(Request $request){


        return response()->json(['id' => $request->id]);
    }
}
