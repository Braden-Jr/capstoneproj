<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Products;
use App\Models\Cart_items;
use App\Models\User;
use App\Models\Transaction;

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

    // function filter(Request $request){
    //     $filter = Products::where('Gender', '=', 'Female')
    //           ->where('Brand', '=', 'Puma')
    //           ->get();
    //     return view('product-detail',['data'=>$product]);
    // }

    function findProduct(Request $request){
        $product =Products::find($request->id);
        return view('product-detail',['data'=>$product]);
    }

    function addToCart(Request $request){
            if($request->orderedsize==null){
                return back()->with('cartstatus','Please select the shoe size.');
            }
            elseif($request->quantity == null || $request->quantity == "" ){
                return back()->with('cartstatus','Enter quantity.');
            }
            else{
                $orderedprice = $request->quantity * $request->price;
                $cart = Cart_items::create($request->userid,$request->itemid,$request->orderedsize,$request->quantity,$orderedprice);
                $user = User::firstWhere('id', $request->userid);
                $c=cart_items::where('user_id',$user->id)->get()->count();
               
                session()->put('cartitem', $c);
                return back()->with('cartstatus','Added to Cart.');
            }
        }
        function getCart(Request $request){
            $comments = User::find(session('user_id'))->getCart;
            return view('cart', ['data'=>$comments]);       
        }

        function getCheckOut(Request $request){
            $checkOutItems = $request->input('cart_checkbox');
            $getcartitems = Cart_items::find($checkOutItems);
            return view('checkout', ['data'=>$getcartitems]);
        }

        function setTransaction(Request $request){
           //dd($request->all());
            $wholeaddress = $request->address. " " .$request->address2;
            $trans = Transaction::createTransaction($request->user_id,$request->products,$request->totalprice,$request->address,$request->state,$request->towncity,$request->zippostalcode,$request->email,$request->pnumber,$request->modeofpayment,$request->status);
         

            return view('order-complete');  
        }
}
