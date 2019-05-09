@extends('layouts.app')

@section('content')
<div class="container">
<a href="/posts" class="btn btn-dark rounded-0">Go Back</a>
<div class="card my-3 rounded-0">
    <div class="card-header pb-1"><h3>{{$post->title}}</h3></div>
    <div class="card-body">
        <p>{{$post->body}}</p>
        <div class="d-flex justify-content-between">
            <small>Date Created: {{$post->created_at}}</small>
            <small>by {{$post->user->name}}</small>
        </div>
    </div>
</div>  

<div class="d-flex justify-content-end">

{{-- <a href="/posts/{{$post->id}}/edit" class="btn btn-primary mr-3">Edit</a> --}}
{{-- <a href="/posts/{{$post->id}}/delete" class="btn btn-danger">Delete</a>   --}}

{{-- {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST']) !!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{!! Form::close() !!} --}}

</div>
</div>
@endsection