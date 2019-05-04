@extends('layouts.app')

@section('content')

    <a href="/posts" class="btn btn-primary">Go Back</a>
        <div class="card my-3">
        <div class="card-header pb-1"><h3>{{$post->title}}</h3></div>
            <div class="card-body">
                <p>{{$post->body}}</p>
                <small>Date Created: {{$post->created_at}}</small>
            </div>
        </div>          

@endsection