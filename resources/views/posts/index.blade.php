@extends('layouts.app')
@section('content')
    <h1>Posts</h1>
    @if (count($posts)>0)
        @foreach ($posts as $post)
            <div class="row my-2">
                <div class="col-2 mx-auto p-2">
                        <a href="/posts/{{$post->id}}">
                            <img class="card-img-top mx-auto" src="storage/cover_images/{{$post->cover_image}}" alt="Card image cap">
                        </a>
                </div>
                <div class="col-10 py-4">
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

