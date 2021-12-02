@extends('layouts.app')

@section('content')

    <div class="card">

        <div class="card-body">
            <h1>Edit Posts</h1>
            {!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id], 'method' => 'POST','enctype'=>'multipart/form-data']) !!}

            <div class="form-group">
                {{ Form::label('title', 'Title') }}
                {{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title']) }}
            </div>
            <div class="form-group">
                {{ Form::label('body', 'Body') }}
                {{ Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Body Text', 'id' => 'editor']) }}
            </div>
            <div class="form-group">
                {{ Form::file('cover_image') }}
            </div>
            {{ Form::hidden('_method', 'PUT') }}
            {{ Form::submit('submit', ['class' => 'btn btn-primary']) }}

            {!! Form::close() !!}

        </div>
    </div>






@endsection

@section('ck-editor')
    <script src="https://cdn.ckeditor.com/ckeditor5/31.0.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>



@endsection
