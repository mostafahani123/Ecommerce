@extends('layout.app')
@section('basc-index')
    <section class="container my-5">
     
                 <h1 class="text-center text-light">HOME page Products</h1>
                 @foreach ($prduct_send as $product)
                 <div class="row">
                  <div class="card ml-5" style="width: 18rem;">
                      <img class="card-img-top" src="..." alt="Card image cap">
                      <div class="card-body" >
                        <h5 class="card-title">{{$product['name']}}</h5>
                        <p class="card-text">{{$product['price']}}</p>
                        <p class="card-text">{{$product['quantity']}}</p>
                        <p class="card-text">{{$product['description']}}</p>
                       
                        <a href="{{url("/details", $product->id)}}" class="btn btn-primary">details</a>
                        <a href="{{ url("/product/delete", $product->id)}}" class="btn btn-danger">delete</a>
                        
                        <a href="{{url("/edit/product", $product->id)}}" class="btn btn-dark">Edit</a>
              
                      
                      </div>
                    </div>
                    @endforeach
              </div>
                 
               
    </section>
@endsection
@section("title")
Home Page
@endsection
