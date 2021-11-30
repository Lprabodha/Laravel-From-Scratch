@extends('layouts.app')

@section('content')
    <div class="p-2">
        <a href="/posts" class="btn btn-secondary">Go Back</a>
    </div>

    <h1>{{ $post->title }}</h1>
    <div>
        {{ $post->body }}
    </div>
    <hr>
    <small>Written on {{ $post->created_at }}</small>
@endsection
