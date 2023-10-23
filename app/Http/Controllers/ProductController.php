<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductRequest; 
class ProductController extends Controller
{
    function details($prod_id){
       $product = Product::findorfail($prod_id);
       
            //    $product =product::whereId($prod_id)->get();
        return view("products.details" , ["details" => $product]);
    }


    function create(){
        
        return view("products.create");
    }

    function store( ProductRequest $data){
        $create = $data->all();
         $product = new Product();
        
              $product->create($create);
         return redirect("/");
          
    }

    function delete( Product $id){
           $id->delete();
           return redirect("/");
    }
    function edit(Product $editdata){
            $edit = $editdata->limit(1)->get();
            // $product = new Product();
            dd($edit);
            // $product->update($edit);
            // return view("products.edit", ['product' => $product ]);
    }
}
