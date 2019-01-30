@extends('layouts.app')
@section('content')
    <h1>Edit post</h1>
    {!! Form::open( ['action' => ['PostsController@update',$post->id] , 'method' => 'POST'] ) !!}
        <div class="form-group">  
            {{Form::label('title','title')}}
            {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'title'])}}
            {{Form::label('body','body')}}
            {{Form::textarea('body',$post->body,['class'=>'form-control','placeholder'=>'body','id'=>'article-ckeditor'])}}

        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    
    {!! Form::close() !!}
@endsection