@extends("layout.app")

@section("basc-index")
<h2 class="text-center text-light">Account user your website</h2>
<section class="container my-5">
<div class="row ">
    @foreach( $user as $user)
    <div class="card" style="width: 18rem;">
        <div class="card-header">
         {{$user['fristname']}}
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">{{$user['Lastname']}}</li>
          <li class="list-group-item">{{$user['email']}}</li>
          <li class="list-group-item">{{$user['Number']}}</li>
        </ul>
        <a href="{{url("detailuser" , $user->id)}}" class="btn btn-primary text-center">details</a>

      </div>
      @endforeach
</div>
</section>
@endsection

@section('title')
user_page 
@endsection