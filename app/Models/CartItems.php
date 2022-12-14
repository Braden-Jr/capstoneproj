<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItems extends Model
{
    use HasFactory;

    public function getProduct(){
        return $this->belongsTo(ItemList::class,'item_id');
    }
}
