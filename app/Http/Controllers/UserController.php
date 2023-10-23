<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
   function user(){
   $users = User::get();
   
    return view("Users" , ['user' => $users]);
   }
   function deletee(User $id){
         $id->delete();
         return redirect("/users");

   }
}
