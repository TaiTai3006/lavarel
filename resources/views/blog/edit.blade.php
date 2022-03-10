@extends('layouts.app')
@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 ">
        <h1 class="text-6xl">
            Edit post
        </h1>
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
    <form action="/blog/{{$post->slug}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <textarea name="title" class="bg-gray-0 block border-b-2 w-full h-10 text-3xl outline-none">{{$post->title}}</textarea>
        <textarea name="description"  
        class="py-5 bg-gray-0 block border-b-2 w-full h-60 text-xl outline-none ">{{$post->description}}
        </textarea>
        <br>
        <button class="bg-pink-600 px-5 uppercase bg-transparent text-gray-100 text-2xl font-extrabold py-3 rounded-3xl">
            Submit
        </button>
    </form>
</div>
@endsection