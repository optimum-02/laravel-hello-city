@extends('base')
@section('content')
<img src="{{asset('/images/logo.jpeg')}}" alt="Image cotonou" class="mt-12 rounded shadow-md h-32" />
<h1 class="text-3x sm:text-5xl font-semibold text-indigo-600 mt-5">Hello from Cotonou</h1>
<p class="text-lg text-gray-800">It's currently {{date('h:i A')}}</p>
@endsection