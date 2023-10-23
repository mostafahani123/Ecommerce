@extends('layout.app')
@section('title')
details page
@endsection
@section('basc-index')

<section class="container" >
<div class="my-5 bg-dark" style="border-radius: 20px;  opacity:10px ;">
    <h1 class="text-center text-light bg-dark"> <span class="text-danger">name:</span> {{ $details->name }}</h1>
    <h2 class="text-center text-light bg-dark"><span class="text-danger">price:</span> {{ $details->price }}</h2>
    <h2 class="text-center text-light bg-dark"><span class="text-danger">quantity:</span> {{ $details->quantity }}</h2>
    <p class="text-center text-light bg-dark"><span class="text-danger">description:</span> {{ $details->description }}</p>
</div>
</section>
@endsection