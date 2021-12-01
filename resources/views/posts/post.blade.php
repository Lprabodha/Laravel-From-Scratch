@extends('layouts.app')

@section('content')

<h1>Posts</h1>

    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card-body">
                <h3 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
               <small>Written on{{$post->created_at}} by {{$post->user->name}}</small>

            </div>
        @endforeach

        {{$posts->links()}}
        
    @else
        <p>No Posts Found</p>
    @endif
    
@endsection