@extends('app')


@section('content')
<img src="{{asset('images/img1.jpg')}}" alt="img1" class="mt-12 rounded shadow-md h-32">
        <h1 class="sm:text-5xl mt-5 text-3xl   font-semibold text-indigo-600">Hello from cameroun!</h1>

        <p class="text-lg  text-gray-800">It's currently {{ date('h:i A')}}</p>

@endsection('content')
 