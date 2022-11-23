<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\cart_items;
use Hash, Auth;


class AccountController extends Controller
{
    function signup(Request $request){
        if($request->fname =="" || $request->email =="" ||$request->lname ==""||$request->password =="" || $request->address == ""){
            return back()->with('status','Invalid empty fields.');
        }
        else{
            $wholename = $request->fname . " " . $request->lname;
            $user = User::create($wholename,$request->email,$request->password,$request->address);
            return back()->with('status','Account Created.');
        }
    }

    function login(Request $request){ 
        // $users = User::table('id')->count();
        // dd($users);
        $credential=[
          'email' => $request->email,
          'password' => $request->password
        ];
        $loginAttempt= Auth::attempt($credential);
        if($loginAttempt){
        $request->session()->regenerate();
        $user = User::firstWhere('email', $request->email);
        $c=cart_items::where('user_id',$user->id)->get()->count(); // Change User DB to CartList DB & change 'email' to 'user_id'
       session()->put('username', $user->name);
       session()->put('cartitem', $c);
       session()->save();
        return redirect('/');
      }
      else{
          return back()->with('loginstatus',"incorrect username or password");
      }
  }
  function getLogOut(Request $request){
    Auth::logout();
    $request->session()->invalidate();
    return redirect('/')->with(['loginstatus' => 'Logged Out']);
}
}
?>