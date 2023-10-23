<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DetailsController extends Controller
{
    function detailsuser($id_user){
          $user =  User::find($id_user);


        // $user = User::where("id" , $id_user)->get();

         
        return view("userdetails.details", ["users" => $user]);
    }
}
