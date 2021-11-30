@extends('layouts.app')

@section('content')

    <div class="jumbotron text-center">
        <h1>{{ $title }}</h1>
        <p>This is the laravel application from the "Laravel from Scratch"</p>
        <p><a href="/login" class="btn btn-primary btn-lg" role="button">Login</a>
            <a href="/register" role="button" class="btn btn-success btn-lg">Register</a>
        </p>

    </div>


@endsection
