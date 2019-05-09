@extends('layouts.app')

@section('content')
<div class="container">
<a href="/blog" class="btn btn-dark mb-3 rounded-0">Go Back</a>
<div class="card rounded-0 info-left">
    <div class="card-header"><b class="pt-3">Create Post</b></div>
    <div class="card-body">
        {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!} 
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
            </div>
            <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Body'])}}
            </div>
            <div class="form-group">
                {{Form::label('cover_image', 'Picture')}}
                {{Form::file('cover_image', ['class' => 'form-control'])}}
            </div>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Update', ['class' => 'btn btn-success rounded-0 px-3'])}}
        {!! Form::close() !!}
    </div>
</div>
</div>   
@endsection