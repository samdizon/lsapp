@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method'=>'POST', 'enctype'=>'multipart/data', 'files'=>true]) !!}
        <div class="form-group">
          {{Form::label('title','Title')}}
          {{Form::text('title','',['class'=>'form-control', 'placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body','Body')}}
            {{Form::textarea('body','',['id'=>'article-ckeditor','class'=>'form-control', 'placeholder'=>'Post Body'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        <div class="text-right">
                {{Form::submit('Save',['class'=>'btn btn-outline-primary'])}}
        </div>
    {!! Form::close() !!} 
@endsection