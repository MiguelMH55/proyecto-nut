@extends('layouts/layoutsHome/layout')
@section('title', "B")
@section('contenido')

<div class="container py-8">
    <h1 class="text-4xl font-bold text-gray-600">{{$post->name}}</h1>


    <div class="text-lg text-gray-500 mb-2">
        {{$post->extract}}
    </div>

    <div class="grid grid-col-3">

        {{-- Contenido principal --}}
        <div class="col-span-2">

            <figure>
                <img class="w-full h-80 object-cover object-center" src="{{Storage::url($post->image->url)}}" alt="">
            </figure>

            <div class="text-base text-gray-500 mt-4">
                {{$post->body}}
            </div>

        </div>
       
        {{-- Contenido relacionado --}}
        <aside> 
            <h1 class="">Más en {{$post->category->name}}</h1>

            <ul>
                @foreach ($similares as $similar)
                <li class="mb-4">
                    <a class="flex" href="{{route('posts.show', $similar)}}">
                        <img class="w-36 h-20 object-cover object-center" src="{{Storage::url($similar->image->url)}}" alt="">
                        <span class="ml-2 text-gray-600">{{$similar->name}}</span>
                    </a>
                </li>

                    
                @endforeach
            </ul>
        </aside>
    </div>
</div>

@stop