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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
