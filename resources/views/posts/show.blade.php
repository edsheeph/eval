@extends('layouts.app')

@section('content')
<div class="container">
<a href="/posts" class="btn btn-dark rounded-0">Go Back</a>
<div class="card my-3 rounded-0">
    <div class="card-header pb-1"><h3>{{$post->title}}</h3></div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <img src="/storage/cover_images/{{$post->cover_image}}" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-md-8">
                <p>{{$post->body}}</p>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <small>Date Created: {{$post->created_at}}</small>
            <small>by {{$post->user->name}}</small>
        </div>
    </div>
</div>  

<div class="d-flex justify-content-end">

@if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)
    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary px-4 rounded-0 mr-3">Edit</a>

    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger px-3 rounded-0'])}}
    {!! Form::close() !!}
    @endif
@endif

</div>
</div>
@endsection