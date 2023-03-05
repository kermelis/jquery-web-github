<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCat;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function productlist()
    {
        $prod = ProductCat::all();
        return view('productlist', compact('prod'));
    }

    public function findProductName(Request $request){
        $data = Product::select('productname','id')->where('prod_cat_id',$request->id)->take(100)->get();
        return response()->json($data);
    }

    public function findPrice(Request $request){
        $p = Product::select('price')->where('id',$request->id)->first();
        return response()->json($p);
    }
}
