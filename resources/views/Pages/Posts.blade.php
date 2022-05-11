@Extends('layouts.master')
@section('title', 'Cars Page')
@section('content')

    <div class="grid grid-cols-3 gap-4 px-3">
        @foreach ($posts as $post)
            <div class="flex justify-center wow bounceInUp animated animate__fadeInTopLeft " data-wow-duration="1.5s" > 
                <div class="rounded-lg columns-xl shadow-lg bg-white max-w-sm  ">
                    <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
                        <img class="rounded-t-lg" src="{{asset('images/posts/'. $post -> image)}}" alt=""/>
                    </a>
                    <div class="p-6">
                        <h5 class="text-gray-900 text-xl font-medium mb-2">{{$post -> brand}}</h5>
                        <h2 class="card-model">Model: {{$post -> model}}</h2>
                        <h2 class="card-category">Category: {{$post -> category}}</h2>
                        <h2 class="card-year">Year: {{$post -> year}}</h2>
                        <h2 class="card-wheel">Wheel: {{$post -> wheel}}</h2>
                        <a href="{{route('post-show', ['id'=> $post])}}" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">go somewhere</a>
                    
                    </div>
                    <div class="flex space-x-2 justify-center">
                        <div class="tools">
                            <a href="{{route('post-edit', ['id'=> $post])}} " class="inline-block px-6 py-2.5 bg-blue-400 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-500 hover:shadow-lg focus:bg-blue-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-600 active:shadow-lg transition duration-150 ease-in-out"> Edit </a>
                        </div>
                        <div class="tools">
                            <form method="post" action="{{route('post-delete', ['id'=> $post])}}" onsubmit="checkStatus(event)">
                                @csrf
                                @method('DELETE') 
                                <button type="submit" class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out">Delete</button>
                            </form>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        
                        <div class="bg-white rounded-lg border border-gray-200 w-96 text-gray-900">
                            @foreach ($post -> comments as $comment )
                              
                          <a
                            href="#!"
                            aria-current="true"
                            class="
                                block
                                px-6
                                py-2
                                border-b border-gray-200
                                w-full
                                hover:bg-gray-100 hover:text-gray-500
                                focus:outline-none focus:ring-0 focus:bg-gray-200 focus:text-gray-600
                                transition
                                duration-500
                                cursor-pointer
                            "
                          >
                          {{ $comment -> comment}}
                          </a>
                          @endforeach
                        </div>
                      </div>
                </div>
            </div>
        
        @endforeach
    </div>




    {{-- <div class="container-fluid py-3">
        <div class="container">
            <h1>
                All Posts <i class="fa-solid fa-signs-post fa-lg"></i>
            </h1>
        </div>
    </div> --}}

    {{-- <div class="container my-3">
        @if (session()->has('message'))
            @include('templates.message')
        @endif
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-header">
                            <img src="{{asset('images/posts/'. $post -> image)}}" class="card-img-top" alt="..." />
                        </div>
                        <div class="card-body">
                            <h1 class="card-title">{{$post -> brand}}</h1>
                            <h2 class="card-model">Model: {{$post -> model}}</h2>
                            <h2 class="card-category">Category: {{$post -> category}}</h2>
                            <h2 class="card-year">Year: {{$post -> year}}</h2>
                            <h2 class="card-wheel">Wheel: {{$post -> wheel}}</h2>
                            <a href="{{route('post-show', ['id'=> $post])}}" class="btn btn-primary">go somewhere</a>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-between">
                                <div class="tools">
                                    <a href="{{route('post-edit', ['id'=> $post])}}" class="btn btn-primary"> Edit </a>
                                </div>
                                <div class="tools">
                                    <form method="post" action="{{route('post-delete', ['id'=> $post])}}"
                                        onsubmit="return confirm('Are you sure you want to delete this post?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="list-group">
                        @foreach ($post -> comments as $comment )
                            <li class="list-group-item">{{ $comment -> comment}}</li>    
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>  
    </div> --}}


@endsection


@section('script')
<script>
function checkStatus(e) {
    e.preventDefault();
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed)  {
            e.target.submit()
        }
    })
}
</script>
@endsection