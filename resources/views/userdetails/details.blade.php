@extends("layout.app")
@section('title')
    details user
@endsection
@section("basc-index")
<section>
   
       
        
        <div class="card text-center">
            <div class="card-header">
                {{$users->fristname}}
            </div>
            <div class="card-body">
              <h5 class="card-title">{{$users->Lastname}}</h5>
              <p class="card-text">{{$users->Email}}</p>
              <p class="card-text">{{$users->Number}}</p>
              <a href="{{url("/product/deletee", $users->id)}}" class="btn btn-danger">delete</a>
            </div>
          </div>

</section>
@endsection