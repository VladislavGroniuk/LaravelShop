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

    public function showCategory(Request $request, $cat_alias){
        $cat = Category::where('alias',$cat_alias)->first();

        $paginate = 2;
        $products = Product::where('category_id',$cat->id)->paginate($paginate);

        if(isset($request->orderBy)){
            if($request->orderBy == 'price-low-high'){
                $products = Product::where('category_id',$cat->id)->orderBy('price')->paginate($paginate);
            }
            if($request->orderBy == 'price-high-low'){
                $products = Product::where('category_id',$cat->id)->orderBy('price','desc')->paginate($paginate);
            }
            if($request->orderBy == 'name-a-z'){
                $products = Product::where('category_id',$cat->id)->orderBy('title')->paginate($paginate);
            }
            if($request->orderBy == 'name-z-a'){
                $products = Product::where('category_id',$cat->id)->orderBy('title','desc')->paginate($paginate);
            }
        }

        if($request->ajax()){
            return view('ajax.order-by',[
                'products' => $products
            ])->render();
        }

        return view('categories.index',[
            'cat' => $cat,
            'products' => $products,
        ]);
    }

}
