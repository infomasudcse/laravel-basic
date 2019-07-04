
@extends('layouts.app')
        @section('content')
                 <h1>{{$title}}</h1>
                <h2>This is index page </h2>
                <a class="btn btn-lg btn-info" href="/login">Login</a>
                <a class="btn btn-lg btn-primary" href="/register" role="button">Register</a>
        @endsection
        
   