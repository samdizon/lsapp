@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-outline-primary float-right">Create post</a>
                    <h3>Your blog post</h3>
                    @if (count($posts)>0)
                        <div class="container mt-5 table-responsive">
                            <table class="table table-striped table-inverse ">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>Title</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($posts as $post)
                                                <tr>
                                                    <td scope="row">{{$post->title}}</td>
                                                    <td class="text-right"><a href="/posts/{{$post->id}}/edit" class="btn btn-outline-info">Edit</a></td>
                                                    <td class="text-left">
                                                        {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method' => 'POST'])!!}
                                                            {!!Form::submit('Delete',['class'=>'btn btn-outline-danger'])!!}
                                                            {!!Form::hidden('_method','DELETE')!!}
                                                        {!!Form::close()!!}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                </table>
                        </div>
                    @else
                        <small>No posts found...</small>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
