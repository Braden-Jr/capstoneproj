<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\Stock_History;
use App\Models\Transac;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    //

    function displayAll(){
        $products= Products::paginate(5); 
        return view('stock',['data'=>$products]);
    }

    function updateStock(Request $request){
        $stock =Products::find($request->id);
     
   
   if($stock){
    $stock->stocks = $request->stock + $stock->stocks;
   
    $stock->save();
    $stock = Stock_History::create($request->product,$request->stock,$request->admin);
   
    return back()->with("update successfully");
    

   }
   else{
    return back()->with("failed");
   }
    }

    function allClient(){
        $client= User::where('type','client')->paginate(5); 
        return view('user',['data'=>$client]);
    }


    function updateClient(Request $request){
        $client =User::find($request->uid);
      
    
     

   if($client){
    $client->name = $request->name;
    $client->email = $request->email;
    $client->address = $request->address;


    $client->save();
  
    return back()->with("update successfully");
    

   }
   else{
    return back()->with("failed");
   }
    }
    function deleteClient(Request $request){
        $client =User::find($request->did);
        
    
     

   if($client){

    $client->status = $request->delete;


    $client->save();
    return back()->with("update successfully");
    

   }
   else{
    return back()->with("failed");
   }
    }

    function allAdmin(){
        $admin= User::where('type','admin')->paginate(5); 

        return view('admin',['data'=>$admin]);
    }

    function adminSignup(Request $request){
        if($request->fname =="" || $request->email =="" ||$request->lname ==""||$request->password =="" || $request->address == ""){
            return back()->with('status','Invalid empty fields.');
        }
        else{
            $wholename = $request->fname . " " . $request->lname;
            $user = User::create($wholename,$request->email,$request->password,$request->address,$request->type);
            return back()->with('status','Account Created.');
        }
    }

    function allStockHis(){
        $stockhis= Stock_History::all(); 
       // dd($stockhis);

        return view('stockhistory',['data'=>$stockhis]);
    }



    function allTransaction(){
        $products= Transaction::paginate(5); 
   
        return view('sales',['data'=>$products]);
    }

    function dashboard(){
        $products= Transaction::all();
        $product= Transaction::all()->count();
       
       
        return view('index',['data'=>$products,'hello'=>$product]);
    }

}
