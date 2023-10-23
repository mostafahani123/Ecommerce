<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    
    function  login(){
         return view("auth.login");
    }


    function handle_login(Request $request){
       $data =  $request->all();
      //  dd($data);
      $result = Auth::attempt(['fristname' => $data['fristname'], 'password' => $data['password']]);
     
      if($result){
      return redirect("/");
      }else{
      return redirect()->back();
      }
    }
}
