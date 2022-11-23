<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock_History extends Model
{
    use HasFactory;
    public static function create($item_name,$stock_added,$admin){
        $stockhis = new Stock_History();
    
        $stockhis->item_name=$item_name;
        $stockhis->stock_added=$stock_added;  
        $stockhis->admin=$admin;  

        
        $stockhis->save();
        
    
        return $stockhis;
    }
}
