<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Hash;
class RegisterController extends Controller
{
   function register(){
     return view("auth.register");
}
function handle_register(Request $request){
   $data = $request->all();
   $data['password'] = Hash::make($data['password']);
   User::create($data);
  return redirect("/login");
}
}
