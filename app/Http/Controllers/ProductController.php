<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Products;

class ProductController extends Controller
{
    function displayAll(){
        $products= Products::paginate(12);
        return view('welcome',['data'=>$products]);
    }

    function displayMale(){
        $Male=Products::where('Gender','Male')->paginate(12);
        return view('men',['data'=>$Male]);
    }

    function displayFemale(){
        $Female=Products::where('Gender','Female')->paginate(6);
        return view('women',['data'=>$Female]);
    }

  
    function findProduct(Request $request){
        $product =Products::find($request->id);
        return view('product-detail',['data'=>$product]);
    }
}
