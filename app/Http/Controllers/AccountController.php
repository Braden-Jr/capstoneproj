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
            $user = User::create($wholename,$request->email,$request->password,$request->address,$request->type);
            return back()->with('status','Account Created.');
        }
    }

    function userLogin(Request $request){ 
        // $users = User::table('id')->count();
        // dd($users);
        

        $credential=[
          'email' => $request->email,
          'password' => $request->password,
          'type' => $request->client
        ];

        $users = User::where('email', $request->email)->get();
        
        foreach($users as $useq){
          if ($useq->status == "Deleted"){
            return back()->with('status',"Account has been deleted");
          }

          elseif($useq->type =="admin"){
            return back()->with('status',"This email is not a client account");
          }
          
        }

      
        $loginAttempt= Auth::attempt($credential);
        if( $loginAttempt){
        $request->session()->regenerate();
        $user = User::firstWhere('email', $request->email);
        $c=cart_items::where('user_id',$user->id)->get()->count(); // Change User DB to CartList DB & change 'email' to 'user_id'
       session()->put('username', $user->name);
       session()->put('user_id', $user->id);
       session()->put('cartitem', $c);
       session()->save();
        return redirect('/');
      }

      elseif($request->email == ""){
        return back()->with('status',"You need to input something");
      }
      else{
          return back()->with('status',"incorrect username or password");
      }
  }
  function adminLogin(Request $request){ 
    // $users = User::table('id')->count();
    // dd($users);

    $credential=[
      'email' => $request->email,
      'password' => $request->password,
      'type' => $request->admin
    ];
    
    $users = User::where('email', $request->email)->get();
        
    foreach($users as $useq){
      if ($useq->status == "Deleted"){
        return back()->with('status',"Account has been deleted");
      }

      elseif($useq->type =="client"){
        return back()->with('status',"This email is not an admin account");
      }
      
    }
    $loginAttempt= Auth::attempt($credential);
    if( $loginAttempt){
      $request->session()->regenerate();
      $user = User::firstWhere('email', $request->email);
     session()->put('username', $user->name);
     session()->put('email', $user->email);
     session()->put('address', $user->address);
     session()->put('type', $user->type);
     session()->save();
    return redirect('/admin/dashboard');
  }

  elseif($request->email == ""){
    return back()->with('status',"You need to input something");
  }
  else{
      return back()->with('status',"incorrect username or password");
  }
}
  function getLogOut(Request $request){
    Auth::logout();
    $request->session()->invalidate();
    return redirect('/')->with(['loginstatus' => 'Logged Out']);
}

function adminLogout(Request $request){
    Auth::logout();
    $request->session()->invalidate();
    return redirect('/adminlogin')->with(['loginstatus' => 'Logged Out']);

  }



}

?>