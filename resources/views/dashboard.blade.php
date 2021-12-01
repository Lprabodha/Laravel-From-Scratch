@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <a href="/posts/create" class="btn btn-primary ms-5">Create Posts</a>
                        {{-- {{ __('You are logged in!') }} --}}
                        <h3 class="mt-2">Your Blog Posts</h3>
                        @if (count($posts) > 0)
                            <table class="table table-striped">
                                <tr>
                                    <th>Title</th>
                                    <th></th>
                                    <th></th>
                                </tr>

                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $post->title }}</td>
                                        <td><a href="/posts/{{ $post->id }}/edit" class="btn btn-warning">Edit</a></td>
                                        <td>
                                            {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-end']) !!}
                                            {{ Form::hidden('_method', 'DELETE') }}
                                            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                            {!! Form::close() !!}
                                        </td>

                                    </tr>
                                @endforeach
                            </table>


                        @else
                            <p>Your Have No Posts</p>

                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
