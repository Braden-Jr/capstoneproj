<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart_items extends Model
{
    use HasFactory;

    public static function create($userid,$itemid,$orderedsize,$orderedquantity,$orderedprice){
        $cart = new Cart_items();
    
        $cart->user_id=$userid;
        $cart->item_id=$itemid;    
        $cart->orderedsize=$orderedsize;
        $cart->orderedquantity=$orderedquantity;
        $cart->orderedprice=$orderedprice;
        $cart->save();
    
        return $cart;
    }
}
