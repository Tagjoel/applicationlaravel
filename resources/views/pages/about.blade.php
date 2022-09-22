@extends('app')

@section('title', 'About us |'. config('app.name'))


@section('content')
<img src="{{asset('images/img2.jpg')}}" alt="img2" class="my-12 rounded-full shadow-md h-20">
       <h2 class=" mb-5 text-gray-700">
              Built with <span class="text-pink-500">&hearts; </span> by JOEL 8 NET.
       </h2>
       <p>
              <a href="{{route('home')}}" class="text-indigo-500 hover:text-indigo-600 underline">Revenir a la page d'accueil</a>
       </p>

@endsection('content')
 