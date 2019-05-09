@extends('layouts.app')

@section('content')
<div class="container">
<a href="/posts" class="btn btn-dark mb-3 rounded-0">Go Back</a>
<div class="card rounded-0">
    <div class="card-header"><b>Create Post</b></div>
    <div class="card-body">
        {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!} 
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
            </div>
            <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body'])}}
            </div>
            <div class="form-group">
                {{Form::label('cover_image', 'Picture')}}
                {{Form::file('cover_image', ['class' => 'form-control'])}}
            </div>
            {{Form::submit('Post', ['class' => 'btn btn-primary rounded-0 px-3'])}}
        {!! Form::close() !!}
    </div>
</div>
</div>      
@endsection