@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-8">
            <h1>{{$post->title}}</h1>  
        </div>
        <div class="col-4 text-right">
            <a class="btn btn-outline-secondary" href="/posts/{{$post->id}}/edit">Edit</a>
            <a class="btn btn-outline-danger" href="/posts/{{$post->id}}">Delete</a>
        </div>
    </div>
    <hr>
    <div>
        <p>{{$post->body}}</p>
    </div>
    <small>Written on {{$post->created_at}}</small>
@endsection