@extends('layouts.app')

@section('content')
<div class="container">
<a href="/posts" class="btn btn-dark mb-3">Go Back</a>
<div class="card">
    <div class="card-header pb-1"><h1>Create Post</h1></div>
    <div class="card-body">
        {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!} 
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
            </div>
            <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Body'])}}
            </div>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Update', ['class' => 'btn btn-success px-3'])}}
        {!! Form::close() !!}
    </div>
</div>
</div>   
@endsection