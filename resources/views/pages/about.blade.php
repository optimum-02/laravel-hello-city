@extends('base')
@section('title')
About Us | {{config('app.name')}}
@endsection
@section('content')
<h1>Built with &hearts; by Optimum.</h1>
<p><a href="{{route('home')}}">Revenir à la page d'accueil</a></p>

@endsection