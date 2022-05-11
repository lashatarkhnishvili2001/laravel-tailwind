@Extends('layouts.master')
@section('title', $post -> brand)
@section('content')

    <div class="flex justify-center wow bounceInUp animated animate__heartBeat animate__bounceInLeft" >
        <div class="rounded-lg shadow-lg bg-white max-w-sm">
        <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
            <img class="rounded-t-lg" src="{{asset('images/posts/'. $post -> image)}}" alt=""/>
        </a>
        <div class="p-6">
            <h5 class="text-gray-900 text-xl font-medium mb-2">{{$post -> brand}}</h5>
            <h2 class="card-model">Model: {{$post -> model}}</h2>
            <h2 class="card-category">Category: {{$post -> category}}</h2>
            <h2 class="card-year">Year: {{$post -> year}}</h2>
            <h2 class="card-wheel">Wheel: {{$post -> wheel}}</h2>
            
        </div>
        </div>
    </div>


    {{-- <div class="container py-2">
        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-6 mb-2">
                <h1> {{$post -> brand}} <i class="fa-solid fa-signs-post fa-lg"></i></h1>
            </div>
        </div>
    </div> --}}

@endsection