@extends('layouts.master')
@section('title', 'AboutUs Page create')
@section('content')
        @if (session()->has('success'))
            @include('templates.message')
        @endif
    <div class="container">
        <h1> Create new Post <i class="fa-solid fa-address-card fa-lg"></i> </h1>
          
            {{-- @method('DELETE') --}}
            <div class="flex justify-center wow bounceInUp animated animate__fadeInTopLeft" data-wow-duration="0.5s">
                <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
                    <form method="post" action="{{ route('post-store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group my-2">
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
                                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"                               aria-describedby="emailHelp" placeholder="{{__('static.form.brand')}}"required/>
                        </div>
                        <div class="form-group my-2">
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
                                placeholder="{{__('static.form.model')}}"required/>
                        </div>
                        <div class="form-group my-2">
                            <label for="exampleInputPassword1" class="form-label inline-block mb-2 text-gray-700">Category</label>
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
                                placeholder="{{__('static.form.category')}}"required/>
                        </div>
                        <div class="form-group my-2">
                            <label for="exampleInputPassword1" class="form-label inline-block mb-2 text-gray-700">year</label>

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
                                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name='year' aria-label="Default select example">
                                <option selected>{{__('static.form.year')}}</option>
                                <option>2014</option>
                                <option>2015</option>
                                <option>2016</option>
                                <option>2017</option>
                                <option>2018</option>
                                <option>2019</option>
                                <option>2020</option>
                                <option>2021</option>
                                <option>2022</option>
                                <option>2023</option>
                                <option>2024</option>
                                <option>2025</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group my-2">
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
                                  <option value="right">Right</option>
                                  <option value="left">Left</option>
                              </select>
                            </div>
                          </div>
                        <div class="form-group my-2">
                            <div class="mb-3 ">
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
                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file" name="image" id="post-image" required/>
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
                                ease-in-out">add new post</button>
                    </form>
                </div>
            </div>
    </div>
@endsection

