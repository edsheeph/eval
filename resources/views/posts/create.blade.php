@extends('layouts.app')

@section('content')

<a href="/posts" class="btn btn-primary mb-3">Go Back</a>
<div class="card">
    <div class="card-header pb-1"><h1>Create Post</h1></div>
    <div class="card-body">
        {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!} 
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
            </div>
            <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body'])}}
            </div>
            {{Form::submit('Post', ['class' => 'btn btn-primary px-3'])}}
        {!! Form::close() !!}
    </div>
</div>
         
@endsection