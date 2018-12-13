@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-10">
            <h1>{{$post->title}}</h1>  
        </div>
        <div class="col-1 text-right">
            <a class="btn btn-outline-secondary" href="/posts/{{$post->id}}/edit">Edit</a>
        </div>
        <div class="col-1">
            {!!Form::open(['action'=> ['PostsController@destroy',$post->id],'method'=>'POST'])!!}
                {!!Form::hidden('_method','DELETE')!!}
                {!!Form::submit('Delete',['class'=>'btn btn-outline-danger'])!!}
            {!!Form::close()!!}
        </div>
    </div>
    <hr>
    <div>
        <p>{!!$post->body!!}</p>
    </div>
    <small>Written on {{$post->created_at}}</small>
@endsection