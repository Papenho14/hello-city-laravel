@extends('base')
    @section('title',config('app.name'))
    @section('content')
        <img src="/images/maroc.png" alt="Casablanca Flag" height="15%" width="15%">
        <h1>Hello from Casablanca</h1>
        <p>It's currently {{date("H:i:s")}} PM.</p>
    @endsection