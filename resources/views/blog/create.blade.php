@extends('layouts.app')
@section('content')
<div class = "background-image grid grid-cols-1 m-auto">
    <div class="flex text-gray-100 pt-50">
        <div class="m-auto pt-2 pd-16 sm:m-auto w-4/5 block text-center">
            <h1 class="sm:text-white text-5xl uppercase front-bold text-shadow-md pd-14">
                Create post
            </h1>
    
        </div>
    </div>
</div>
@if ($errors->any())
<div class="w-4/5 m-auto">
    <ul>
        @foreach($errors->all() as $error)
        <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
            {{$error}}
        </li>
        @endforeach
    </ul>
</div>
@endif
<div class="w-4/5 m-auto pt-20">
    <form action="/blog" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" placeholder="Title..." class="bg-gray-0 block border-b-2 w-full h-20 text-6xl outline-none">
        <textarea name="description"  
        class="py-20 bg-gray-0 block border-b-2 w-full h-60 text-xl outline-none ">
        </textarea>
        <div class="bg-grey-lighter pt-15">
            <label class="w-40 flex flex-col item-center px-2 py-3 bg-yellow-600 shadow-lg tracking-wide uppercase
            border border-indian cursor-pointer">
            <span class=" mt-2 text-gray-100 text-center leading-normal">
                Select a file
            </span>
            <input type="file" name="image" class="hidden">
        </label>
        <br>
        </div>
        <button class="bg-pink-600 px-5 uppercase bg-transparent text-gray-100 text-2xl font-extrabold py-3 rounded-3xl">
            Submit
        </button>
    </form>
</div>
@endsection