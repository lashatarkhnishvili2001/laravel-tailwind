@extends('layouts.master')
@section('title', 'edit page')
@section('content')








<div class="container">
    <h1> update Post <i class="fa-solid fa-signs-post fa-lg"></i> </h1>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            <script type="text/javascript">
                setTimeout(() => {document.querySelector('.alert').style.display = 'none';  }, 3000);
            </script>
        @endif
       
        <div class="flex justify-center wow animate__bounceInDown" data-wow-duration="1s">
            <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
                <form method="post" action="{{ route('post-update', ['id'=> $post])}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group my-2 wow animate__backInLeft" data-wow-duration="1.5s">
                        <label for="exampleInputEmail1" class="form-label inline-block mb-2 text-gray-700">brand address</label>
                        <input type="text" name="brand" class="form-control 
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"  value="{{$post->brand}}" placeholder="Post brend" required/>
                        </div>
                    <div class="form-group my-2 wow animate__backInRight" data-wow-duration="2s">
                        <label for="exampleInputPassword1" class="form-label inline-block mb-2 text-gray-700">Model</label>
                        <input  name="model" class="form-control block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            value="{{$post->model}}" placeholder="Post model"required/>
                    </div> 
                    <div class="form-group my-2 wow animate__backInLeft" data-wow-duration="3s">
                        <label class="form-label inline-block mb-2 text-gray-700">Category</label>
                        <input  name="category" class="form-control block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
                            value="{{$post->category}}" placeholder="Post category"/>
                    </div>
                    <div class="form-group my-2 wow animate__backInRight" data-wow-duration="4s"">
                        <label class="form-label inline-block mb-2 text-gray-700">year</label>

                        <div class="mb-3 ">
                            <input type="number" class="form-select appearance-none
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding bg-no-repeat
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" value="{{$post->year}}" name="year" placeholder="year" />
                        
                        </div>
                    </div>
                    <div class="form-group my-2  wow animate__backInLeft" data-wow-duration="5s"">
                        <label for="exampleInputPassword1" class="form-label inline-block mb-2 text-gray-700">wheel</label>

                        <div class="mb-3 ">
                          <select class="form-select appearance-none
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding bg-no-repeat
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name='wheel' placeholder="{{__('static.from.wheel')}}" aria-label="Default select example">
                              <option selected disabled>{{__('static.form.wheel')}}</option>
                              <option value="right" {{ $post->wheel == 'right' ? 'selected' : ''}}>Right</option>
                              <option value="left" {{ $post->wheel == 'left' ? 'selected' : ''}}>Left</option>
                          </select>
                        </div>
                      </div>
                      
                    <div class="form-group my-2 wow animate__backInRight" data-wow-duration="5.5s"">
                        <div class="mb-3 w-auto">
                            <label for="formFile" class="form-label inline-block mb-2 text-gray-700">Default file input example</label>
                            <input class="form-control
                                block
                                w-full
                                px-3
                                py-1.5
                                text-base
                                font-normal
                                text-gray-700
                                bg-white bg-clip-padding
                                border border-solid border-gray-300
                                rounded
                                transition
                                ease-in-out
                                m-0
                                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file" name="image" id="post-image" />
                        </div>
                    </div>
                    <div class="flex justify-content wow animate__fadeInDownBig " data-wow-duration="2s" >
                        <div class="mb-4  ">
                          <img src="{{asset('images/posts/' . $post ->image)}}" class="max-w-full h-auto rounded-lg" alt="">
                        </div>
                    </div>    
                        <button type="submit" class="
                            px-6
                            py-2.5
                            bg-blue-600
                            text-white
                            font-medium
                            text-xs
                            leading-tight
                            uppercase
                            rounded
                            shadow-md
                            hover:bg-blue-700 hover:shadow-lg
                            focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                            active:bg-blue-800 active:shadow-lg
                            transition
                            duration-150
                            ease-in-out
                            wow animate__zoomIn
                            " data-wow-duration="5s">update post</button>
                </form>
            </div>
        </div>
</div>





    {{-- <div class="container">
        <h1> update Post <i class="fa-solid fa-signs-post fa-lg"></i> </h1>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <form method="post" action="{{ route('post-update', ['id'=> $post])}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <input type="text" name="brand" class="form-control" value="{{$post->brand}}" placeholder="Post brend" required/>
                    </div>
                    <div class="mb-3">
                        <input class="form-control"  name="model" value="{{$post->model}}" placeholder="Post model" required/>
                    </div>
                    <div class="mb-3">
                        <input class="form-control"  name="category" value="{{$post->category}}" placeholder="Post category" required/>
                    </div>
                    <div class="mb-3">
                        <input type="number" class="form-control" value="{{$post->year}}" name="year" placeholder="year" />
                    </div>
                    <div class="mb-3" value="{{$post->wheel}}">
                    <select class="form-select form-select-lg mb-3" name='wheel' placeholder="{{__('static.from.wheel')}}" aria-label=".form-select-lg example" required/>
                                <option value="right" {{ $post->wheel == 'right' ? 'selected' : ''}}>Right</option>
                                <option value="left" {{ $post->wheel == 'left' ? 'selected' : ''}}>Left</option>
                            </select>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col">
                            <div class="mb-3">
                                <label for="post-image" class="form-label">Default file input example</label>
                                <input class="form-control" type="  " name="image" id="post-image"/>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <img src="{{asset('images/posts/' . $post ->image)}}" class="img-thumbnail" alt="...">
                        </div>
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Update Post</button>
                   
                </form>
            </div>
        </div>
    </div> --}}
@endsection