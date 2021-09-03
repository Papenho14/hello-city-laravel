<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title',config('app.name'))</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="flex flex-col justify-between min-h-screen items-center">
        <main role="main">
            @yield('content')
        </main>

        <footer>
            <p class="text-gray-400">
            Copyright {{date("Y")}}.
            @if(! Route::is('about'))
            &copy;  &middot;<a href="{{route('about')}}" class="text-indigo-500 hover:text-indigo-600 underline">About Us</a>
            @endif

            </p>            
        </footer>
    </body>
</html>
