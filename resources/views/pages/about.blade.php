@extends('base')
    @section('title','about us |' .config('app.name'))
    @section('content')
      <img src="/images/data.jpg" alt="data Flag" height="15%" width="15%">
       <p>Built with &hearts; by PAPE SEYDOU DIA.</p>
       <p><a href="{{route('welcome')}}">Revenir vers la page d'accueil.</a></p>
        
    @endsection    
