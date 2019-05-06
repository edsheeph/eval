@extends('layouts.app')

@section('content')

<a href="/posts" class="btn btn-dark">Go Back</a>
<div class="card my-3">
    <div class="card-header pb-1"><h3>{{$post->title}}</h3></div>
    <div class="card-body">
        <p>{{$post->body}}</p>
        <small>Date Created: {{$post->created_at}}</small>
    </div>
</div>  

<hr>

<div class="d-flex justify-content-end">

<a href="/posts/{{$post->id}}/edit" class="btn btn-primary mr-3">Edit</a>
{{-- <a href="/posts/{{$post->id}}/delete" class="btn btn-danger">Delete</a>   --}}

{!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST']) !!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{!! Form::close() !!}

</div>

@endsection