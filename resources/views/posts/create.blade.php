@extends('layouts.app');
@section('content')

    <h1>Create Post</h1>   
   {!! Form::open(['action'=>'PostsController@store','method'=>'POST']) !!}
      
        <div class="from-group">
            {{Form::label('title','Title')}}
            {{Form::text('title','',['class'=>'form-control'])}}

        </div>

        <div class="from-group">
            {{Form::label('body','Body')}}
            {{Form::textarea('body','',['id'=>'article-ckeditor','class'=>'form-control'])}}

        </div>
        <div class="form-group">
            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        </div>
    {!! Form::close() !!}

@endsection