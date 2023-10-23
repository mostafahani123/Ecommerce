<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use  App\Models\Post;

class HomeController extends Controller
{
    function home(){
      $product =Product::orderBy("id")->get();
    //   dd($product);
        return view("index" , ['prduct_send' => $product]);
    }
}
