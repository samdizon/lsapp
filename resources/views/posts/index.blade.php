@extends('layouts.app')
@section('content')
    <h1>Posts</h1>
    @if (count($posts)>0)
        @foreach ($posts as $post)
            <div class="card card card-body bg-light my-2 w-25 ">
                <img class="card-img-top mx-auto" src="storage/cover_images/{{$post->cover_image}}" alt="Card image cap" style="width:100px;">
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

