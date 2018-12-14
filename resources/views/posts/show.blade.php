@extends('layouts.app')
@section('content')
    <div class="container">
        <div>
            <img src="/storage/cover_images/{{$post->cover_image}}" class="img-fluid w-100" alt="{{$post->cover_image}}">
        </div>
        <div class="my-4">
            @if (!Auth::guest())
                <div class="row">
                    <div class="col-10">
                        <h2>{{$post->title}}</h2>
                    </div>
                    @if (Auth::user()->id == $post->user_id)
                        <div class="col-off col-1">
                            <a class="btn btn-outline-secondary" href="/posts/{{$post->id}}/edit">Edit</a>
                        </div>
                        <div class="col-1">
                                {!!Form::open(['action'=> ['PostsController@destroy',$post->id],'method'=>'POST'])!!}
                                {!!Form::hidden('_method','DELETE')!!}
                                {!!Form::submit('Delete',['class'=>'btn btn-outline-danger'])!!}
                            {!!Form::close()!!}
                        </div>
                    @endif
                </div>
            @endif
            <hr>
            <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
        </div>
        <div class="mt-5">
            <p>{!!$post->body!!}</p>
        </div>
    </div>
@endsection