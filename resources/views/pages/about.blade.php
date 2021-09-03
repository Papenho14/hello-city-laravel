@extends('base')
    @section('title','about us |' .config('app.name'))
    @section('content')
      <img src="/images/data.jpg" alt="data Flag" class="my-12 rounded-full shadow-md mt-12 h-32">
       <h2 class="text-gray-700 mb-5">Built with <span class="text-pink-500">&hearts;</span> by PAPE SEYDOU DIA.</h2>
       <p><a href="{{route('welcome')}}" class="text-indigo-500 hover:text-indigo-700 underline">Revenir vers la page d'accueil.</a></p>
        
    @endsection    
