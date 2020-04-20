<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($cat,$product_id){
        $item = Product::where('id',$product_id)->first();

        return view('product.show',[
            'item' => $item
        ]);
    }
}
