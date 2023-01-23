@extends("layouts.app")

@section('content')

{{-- {{$posts}} --}}; <!-- imported from PostsController -->

@if(session()->has('message'))

<div class="container bg-red-100 border border-red-400 text-red-700 px-4 py-3 mx-auto rounded relative" role="alert">
    <strong class="font-bold">Success!</strong>
    <span class="block sm:inline">{{session()->get('message')}}</span>
    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <title>Close</title>
            <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
        </svg>
    </span>
</div>

@endif


<div class="container m-auto text-center py-7">
    <h1 class="text-6xl font-bold text-green-900">All Posts</h1>
</div>

@if(Auth::check())
<div class="container sm:grid mx-auto p-5 border-b border-green-300">
    <a class="bg-green-700  text-green-100 rounded-lg py-4 px-5 font-bold uppercase text-l place-self-start" href="/blog/create">New Post</a>
</div>
@endif


@foreach ($posts as $post)
    

<div class="container sm:grid grid-cols-2 gap-10 mx-auto py-10 px-5 border-b-2 border-green-300">

    <div class="flex">
        <img class="object-cover" src='{{ url('/images') }}/{{$post['image_path']}}'>
    </div>

    <div>

        <h2 class="text-green-700 font-bold text-4xl py-5 sm:pt-0">{{$post['title']}}</h2>
    

        <span>
            By: <span class="text-green-500 italic">{{$post->user->name}}</span>
            On: <span class="text-green-500 italic">{{ date('d-m-Y', strtotime($post->updated_at)) }}</span>           
            <p class="text-l text-green-700 py-7 leading-6">{{$post['description']}}</p>
        
            <a class="bg-green-700  text-green-100 rounded-lg py-4 px-5 font-bold uppercase text-l place-self-start" href="{{ url('/blog') }}/{{$post['slug']}}">More Green ...</a>
        
        </span>
    </div> 

</div>

@endforeach


@endsection