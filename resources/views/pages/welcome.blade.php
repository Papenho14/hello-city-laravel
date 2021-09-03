@extends('base')
    @section('title',config('app.name'))
    @section('content')
        <img src="/images/maroc.png" alt="Casablanca Flag" class="rounded-full shadow shadow-md mt-12 h-32">
        <h2 class="text-indigo-600 text-3xl sm:text-5xl font-semibold mt-5">Hello from Casablanca</h2>
        <p class="text-gray-800 text-lg">It's currently {{date("H:i:s")}} PM.</p>
    @endsection