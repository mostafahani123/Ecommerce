@extends('layout.app')

@section('title')
edit_product
@endsection

@section('basc-index')
<h1 class="text-center my-5">update Product</h1>
<section class="container mb-10" >
    <form  method="GET" action="{{ url("edit/product") }}">
      @csrf
        <div class="mb-3 mt-3">
          <label  class="form-label">product name:</label>
          <input type="text" class="form-control" id="email"  value="{{ $product['name']}}" placeholder="Enter name" name="name">
          @error('name')
          <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
          </div>
              
          @enderror
          
          
        </div>
        <div class="mb-3 mt-3">
            <label class="form-label">Product Price:</label>
            <input type="text" class="form-control" id="email" value="{{ old('price')  }}" placeholder="Enter price" name="price">
           @error('price')
          <div class="alert alert-danger mt-2" role="alert">
            {{$message = [
               "price.required" => "please enter price !"
            ];}}
          </div>
              
          @enderror
          </div>
          <div class="mb-3 mt-3">
            <label  class="form-label">Product quantity:</label>
            <input type="text" class="form-control" id="email"  value="{{ old('quantity')  }}" placeholder="Enter quantity" name="quantity">
           @error('quantity')
          <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
          </div>
              
          @enderror
          </div>
          <div class="mb-3 mt-3">
            <label class="form-label">Product description:</label>
            <input type="text" class="form-control" id="email"  value="{{ old('description')  }}" placeholder="Enter description" name="description">
         
         
          @error('description')
          <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
          </div>
              
          @enderror
          </div>
        <button type="submit" class="btn btn-primary">update Data</button>
      </form>
   
</section>
@endsection