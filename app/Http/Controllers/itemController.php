<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
use App\Models\Order;
use App\Models\Items;
use Hash, Auth;


class itemController extends Controller
{
  function Get(Request $request){
    
    $item = Items::create($request->id,$request->quantity);
    $orders = Order::find($request->id);
    if($orders){
        $orders->id=$request->id;
      
         $credential=[
            'product' => $orders->product,
            'user_id' => $orders->user_id,
            'id' =>$orders->id,
          ];
          return view('item',['order'=>$credential]);
        }
  }
  function login(Request $request){
  //   dd($credential);
    $orders = Order::find($request->id);
    if($orders){
        $orders->id=$request->id;
      
         $credential=[
            'product' => $orders->product,
            'user_id' => $orders->user_id,
            'id' =>$orders->id,
          ];
        return view('item',['order'=>$credential]);       
    }
    else{
        return back()->with('status','failed');
    }
   
        
  
}

}
?>