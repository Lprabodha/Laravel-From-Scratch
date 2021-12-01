@extends('layouts.app')

@section('content')

    <div class="card-body">
        <div class="card-body">

            <h1>Create Posts</h1>

            {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'POST','enctype'=>'multipart/form-data']) !!}

            <div class="form-group">
                {{ Form::label('title', 'Title') }}
                {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title']) }}
            </div>
            <div class="form-group">
                {{ Form::label('body', 'Body') }}
                {{ Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body Text', 'id' => 'editor']) }}
            </div>
            <div class="form-group">
                {{Form::file('cover_image')}}
            </div>

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
