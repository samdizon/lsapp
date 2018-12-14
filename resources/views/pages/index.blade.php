@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is the Laravel application from youtube series by Traversy Media</p>
        @if (Auth::guest())
            <p>
                <a class="btn btn-outline-primary btn-lg" href="/login" role="button">Login</a>
                <a class="btn btn-outline-success btn-lg" href="/register" role="button">Register</a>
            </p>
        @else
            <p>
                <a class="btn btn-outline-primary btn-lg" href="/posts/create" role="button">Create post</a>
                <a class="btn btn-outline-success btn-lg" href="/posts" role="button">View blogs</a>
            </p>
        @endif
    </div>
@endsection

