@extends('base', ['title'=>"About Us"])
@section('title')
About Us | {{config('app.name')}}
@endsection
@section('content')
<img src="{{asset('/images/logo.jpeg')}}" alt="Image cotonou" class="px-5 my-12 rounded shadow-md">

<h2 class="text-gray-700">
    Built with <span class="text-pink-500">&hearts;</span> by Optimum.
</h2>
<p>
    <a href="{{route('home')}}" class="text-indigo-500 hover:text-indigo-700 underline my-5">Revenir à la page d'accueil</a>
</p>

@endsection