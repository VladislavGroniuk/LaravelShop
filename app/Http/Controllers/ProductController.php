<?php

namespace App\Http\Controllers;

use App\Category;
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

    public function showCategory($cat_alias){
        $cat = Category::where('alias',$cat_alias)->first();

        return view('categories.index',[
            'cat' => $cat
        ]);
    }
}
