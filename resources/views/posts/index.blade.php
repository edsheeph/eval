@extends('layouts.app')

@section('content')
<div class="container">
<div class="d-flex justify-content-between">
    <h1>Posts</h1>
    <a href="/posts/create" class="btn btn-success pt-3">Create Post</a>
</div>
@if(count($posts) > 1)
    @foreach($posts as $post)
        <div class="card my-3">
        <div class="card-header pb-1"><h4><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4></div>
            <div class="card-body">
                <p>{{$post->body}}</p>
                <small>Date Created: {{$post->created_at}}</small>
            </div>
        </div>          
    @endforeach
    {{-- {{$posts->links()}} --}}
@else
    <p>No posts found</p>
@endif
</div>
@endsection