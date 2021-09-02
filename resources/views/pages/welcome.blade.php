@extends('base')
    @section('title',config('app.name'))
    @section('content')
        <h1>Hello from Casablanca</h1>
        <p>It's currently {{date("H:i:s")}} PM.</p>
    @endsection