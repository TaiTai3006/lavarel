@extends('layouts.app')
@section('content')
<div class = "background-image grid grid-cols-1 m-auto">
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pd-16 sm:m-auto w-4/5 block text-center">
            <h1 class="sm:text-white text-5xl uppercase front-bold text-shadow-md pd-14">
                
            </h1>
            <a
                href="/login"
                class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                JOIN BLOG
            </a>
    
        </div>
    </div>
</div>
<br> <br>
<div class="sm:grid grid-cols-2 w-4/5 m-auto">
    <div class="flex bg-yellow-600 text-gray-100 pt-10">
        <div class="m-auto pt-4 pd-16 sm:m-auto w-4/5 block">
            <span class="uppercase text-xl">
                Blog
            </span>
            <div class="text-xl font-bold py-10">
                <h3>
                 Nơi chia sẻ, trao đổi các kiến về lập trình.
                 </h3>
                 <br>
                <h3>
                "The more that you read, the more things you will know. The more that you learn, the more places you’ll go."
                </h3>
            </div>
            <a href="/blog"
                class="uppercase bg-pink-600 border-2 border-gray-100 text-gray-100 text-xs font-extrabold
                py-3 px-5 rounded-3xl">
                Join now
            </a>
            <h3 class="text-xl font-bold py-10">
            
            </h3>
        </div>
    </div>
    <div>
        <img src="https://cdn.pixabay.com/photo/2016/03/27/20/00/coffee-1284041_1280.jpg" width="700" alt="">
    </div>
</div>

@endsection