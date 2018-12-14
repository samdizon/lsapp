@extends('layouts.app')
@section('content')
    <h1>Posts</h1>
    @if (count($posts)>0)
        @foreach ($posts as $post)
            <div class="card my-2">
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="/posts/{{$post->id}}">{{$post->title}}</a>
                    </h4>
                    <small class="card-text">Written on {{$post->created_at}} by {{$post->user->name}}</small>
                </div>
            </div> 
        @endforeach
        <div class="float-right">{{$posts->links()}}</div>
    @else
        <small>No posts to show...</small>
    @endif
@endsection