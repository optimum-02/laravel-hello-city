<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{getPageTitle($title??null)}}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="py-5 flex flex-col justify-between items-center min-h-screen">
    <main role="main" class="flex flex-col justify-content items-center">@yield('content')</main>
    @include('partials/_footer')
</body>

</html>