@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update',$post->id], 'method'=>'POST']) !!}
        <div class="form-group">
          {!!Form::label('title','Title')!!}
          {!!Form::text('title',$post->title,['class'=>'form-control', 'placeholder'=>'Title'])!!}
        </div>
        <div class="form-group">
            {!!Form::label('body','Body')!!}
            {!!Form::textarea('body',$post->body,['id'=>'article-ckeditor','class'=>'form-control', 'placeholder'=>'Post Body'])!!}
        </div>
        <div class="text-right">
            {!!Form::hidden('_method','PUT')!!}
            {!!Form::submit('Save',['class'=>'btn btn-outline-primary'])!!}
        </div>
    {!! Form::close() !!} 
@endsection