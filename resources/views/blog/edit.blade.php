@extends('layouts.app')

@section('content')


<div class="container m-auto text-center py-7">
    <h1 class="text-6xl font-bold text-green-900">Edit Post</h1>
</div>

<div class="container m-auto py-7">

    <form action="{{ url('/blog') }}/{{$post->slug}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        

        <input type="text" name="title" value="{{$post->title}}" class="w-full h-20 text-6xl rounded-lg shadow-lg border-b p-7 mb-5 focus:ring-green-400 focus:border-green-600">
        <textarea name="description" class="w-full h-60 text-xl rounded-lg shadow-lg border-b p-7 mb-5 focus:ring-green-400 focus:border-green-600">{{$post->description}}</textarea>
        <div class="py-7">
            <label for="img_file" class="bg-green-700 hover:bg-green-200 text-green-200 hover:text-green-700 transition duration-300 cursor-pointer p-5 rounded-lg font-bold uppercase">
                <span>select an image to upload</span>
                <input type="file" name="image" id="img_file" class="hidden">
            </label>
        </div>
        
        <div class="text-center">
            <button type="submit" class="w-1/4 bg-green-200 hover:bg-green-700 text-green-700 hover:text-green-200 transition duration-300 cursor-pointer p-5 rounded-lg font-bold uppercase mt-10">Edit post</button>
        </div>
    
    </form>


</div>
    
@endsection