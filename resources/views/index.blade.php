
@extends('layouts.app')


@section('content')

<!-- Landing -->
<div class="hero-bg-image flex flex-col items-center justify-center">
    <h2 class="text-green-100 text-4xl uppercase font-bold pb-10 text-center">Welcome to <strong class="text-green-600 text-5xl">GREEN</strong> blog</h2>
    <a href="{{ url('/') }}" class="bg-green-100 text-green-700  py-4 px-5 rounded-lg uppercase font-bold text-xl">Start Reading</a>
</div>

<!-- Green is for oxygen -->
<div class="container sm:grid grid-cols-2 gap-10 mx-auto py-10 ">
    <div class="mx-2 md:mx-0">
        <img class="sm:rounded-lg" src="https://picsum.photos/id/353/960/620">
    </div>
    <div class="flex flex-col items-left justify-center m-7 sm:m-0">
        <h2 class="font-bold text-green-700  text-4xl uppercase">green gives more "O"</h2>
        <p class="font-bold text-green-600 text-xl pt-2">Try to increase the green color around yourself</p>
        <p class="py-4 text-green-500 text-sm leading-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit repellendus odit quia veniam officiis facere sapiente deleniti tempora! Voluptatum velit provident harum dolores delectus sit dolore tempore obcaecati perspiciatis necessitatibus!</p>
        <a class="bg-green-700  text-green-100 rounded-lg py-4 px-5 font-bold uppercase text-l place-self-start" href="{{ url('/') }}">More Green ...</a>
    </div>
</div>

<!-- Blog categories -->
<div class="text-center p-10 bg-green-700  text-green-100">
    <h2 class="text-2xl">Bolg categories</h2>
    <div class="container mx-auto pt-7 sm:grid grid-cols-4">
        <div class="font-bold text-2xl py-2">forests</div>
        <div class="font-bold text-2xl py-2">gardens</div>
        <div class="font-bold text-2xl py-2">trees</div>
        <div class="font-bold text-2xl py-2">grass</div>
    </div>
</div>

<!-- Recent Posts -->
<div class="container mx-auto py-10 text-center">
    <h2 class="text-green-900 font-bold text-5xl py-7 capitalize">recent posts</h2>
    <p class="text-green-500 px-10 leading-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae libero ex obcaecati quo iure eos voluptatibus pariatur exercitationem excepturi inventore molestiae, aspernatur dolor, repellat doloribus asperiores laborum at vitae saepe.</p>
</div>

<div class="sm:grid grid-cols-2 w-4/5 mx-auto">
    <div class="flex bg-green-900 text-green-100 pt-7">
        <div class="block m-auto pt-4 pb-10 w-4/5">
            <ul class="md:flex text-xs gap-2">
                <li class="bg-green-100 text-green-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-green-500 hover:text-green-100 transition duration-300">arezona</li>
                <li class="bg-green-100 text-green-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-green-500 hover:text-green-100 transition duration-300">amazon</li>
                <li class="bg-green-100 text-green-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-green-500 hover:text-green-100 transition duration-300">babel</li>
                <li class="bg-green-100 text-green-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-green-500 hover:text-green-100 transition duration-300">california</li>
            </ul>
            <h3 class="text-l py-10 leading-6">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, molestiae delectus autem suscipit ad laboriosam blanditiis alias! Quo eligendi molestiae accusamus, repellat autem beatae modi praesentium unde facilis provident earum.
            </h3>
            {{-- <a href="{{ url('/') }}" class="bg-transparent border-2 text-green-100 py-4 px-5 rounded-lg font-bold uppercase text-l inline-block">green more ...</a> --}}
            <a href="{{route('index')}}" class="bg-transparent border-2 text-green-100 py-4 px-5 rounded-lg font-bold uppercase text-l inline-block">green more ...</a>
        </div>
    </div>

    <div class="flex">
        <img class="object-cover" src="https://picsum.photos/id/83/960/620">
    </div>
</div>

@endsection