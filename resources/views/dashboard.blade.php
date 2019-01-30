@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <a href="/posts/create" class="btn btn-primary">Create post</a>
                    <hr>
                    <table class="table">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach( $posts as $post )
                        <tr>
                            <td>{{$post->title}}</td>
                            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
                            <td>
                                    {!! Form::open( ['action' => ['PostsController@destroy',$post->id] , 'method' => 'POST'] ) !!}
                                        {{Form::hidden('_method','DELETE')}}
                                        {{Form::submit('delete',['class' => 'btn btn-danger'])}}
                                    {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
