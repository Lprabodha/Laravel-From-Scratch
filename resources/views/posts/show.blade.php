@extends('layouts.app')

@section('content')

    <div class="card">
       
        <div class="card-body">
            <div class="p-2">
                <a href="/posts" class="btn btn-secondary">Go Back</a>
            </div>
            <h1>{{ $post->title }}</h1>
            <div>
                {!! $post->body !!}
            </div>
            <hr>
            <small>Written on {{ $post->created_at }} by {{$post->user->name}}</small>
            <hr>
            <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary">Edit</a>

            {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'btn btn-lg float-end']) !!}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
            {!! Form::close() !!}
        </div>



    </div>


@endsection
