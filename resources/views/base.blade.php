<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name'))</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="py-5 flex flex-col justify-between items-center min-h-screen">
    <main role="main" class="flex flex-col justify-content items-center">@yield('content')</main>
    <footer>
        <p class="text-gray-400">&copy; Copyright {{date('Y')}} &middot;
            @if(Route:: is ('home'))
            <a href="{{route('about')}}" class="text-indigo-500 hover:text-indigo-700 underline">About us</a>
            @endif
        </p>
    </footer>
</body>

</html>