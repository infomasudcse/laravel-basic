@extends('layouts.app');
@section('content')
<a href="/posts" class="btn btn-success">Go Back</a>
    <h1>{{$post->title}}</h1>    
    <div>
        {!! $post->body !!}
    </div>
    <small>Written on {{$post->created_at}}</small>


    <div class="mt-4 mb-4">
    <a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a>

        {{ Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'pull-right']) }}

            {{Form::hidden('_method','DELETE')}}
            {{Form::submit('Delete',['class'=>'btn btn-warning'])}}
        {{Form::close()}}

    </div>
   
@endsection