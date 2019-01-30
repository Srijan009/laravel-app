@extends('layouts.app')
@section('content')
    <h1>Create post</h1>
    {!! Form::open( ['action' => 'PostsController@store' , 'method' => 'POST'] ) !!}
        <div class="form-group">  
            {{Form::label('title','title')}}
            {{Form::text('title','',['class'=>'form-control','placeholder'=>'title'])}}
            {{Form::label('body','body')}}
            {{Form::textarea('body','',['class'=>'form-control','placeholder'=>'body','id'=>'article-ckeditor'])}}
        </div>
        {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    
    {!! Form::close() !!}
@endsection