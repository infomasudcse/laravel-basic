@extends('layouts.app');
@section('content')

    <h1>Create Post</h1>   
   {!! Form::open(['action'=>['PostsController@update',$post->id],'method'=>'POST']) !!}
      
        <div class="from-group">
            {{Form::label('title','Title')}}
            {{Form::text('title',$post->title,['class'=>'form-control'])}}

        </div>

        <div class="from-group">
            {{Form::label('body','Body')}}
            {{Form::textarea('body',$post->body,['id'=>'article-ckeditor','class'=>'form-control'])}}

        </div>
        <div class="form-group">
            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        </div>

        {{Form::hidden('_method','PUT')}}
    {!! Form::close() !!}

@endsection