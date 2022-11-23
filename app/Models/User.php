<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Hash;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

  
public static function create($name,$email,$password,$address,$type){
    $user = new User();

    $user->name=$name;
    $user->email=$email;    
    $user->password=Hash::make($password);
    $user->address=$address;
    $user->type=$type;
    $user->save();

    return $user;
}

public static function updates($id){
    $user = User::find($id);
    
}
    public function getSameIds(){
        return $this->hasMany(User::class);
    }

    public function getCart(){
        return $this->hasMany(Cart_items::class);
    }
}
