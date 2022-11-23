<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public static function createTransaction($user_id,$products,$totalprice,$address,$state,$city,$zippostalcode,$email,$pnumber,$modeofpayment,$status){
        $transac = new Transaction();
    
        $transac->user_id=$user_id;
        $transac->products=$products;    
        $transac->totalprice=$totalprice;
        $transac->address=$address;
        $transac->state=$state;    
        $transac->city=$city;
        $transac->postalcode=$zippostalcode;  
        $transac->email=$email;    
        $transac->pnumber=$pnumber;
        $transac->modeofpayment=$modeofpayment;     
        $transac->status=$status;     
        $transac->save();
    
        return $transac;
    }
}
