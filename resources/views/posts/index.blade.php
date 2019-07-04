@extends('layouts.app');
@section('content')
    <h1>Posts</h1>    
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <div class="well">
            <h3><a href='/posts/{{$post->id}}'>{{$post->title}}</a></h3>
                <small>Written On {{$post->created_at}}</small>
            </div>
        @endforeach
        <div class="well mt-4">    
            {{$posts->links()}}
        </div>    
    @else 
    <h3>No Posts Found </h3>
    @endif

@endsection