@extends('layouts.app')
@section('content')
    @if( count($posts) > 0 )
        @foreach( $posts as $post )
            <div class="well">
                <h2><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
                <small>written on -{{$post->created_at}} by -{{$post->user->name}}</small>
                <p>{!!$post->body!!}</p>
            </div>
        @endforeach
        @else
            <p>No posts found</p>
    @endif
@endsection