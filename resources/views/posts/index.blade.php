@extends('layouts.app')

@section('content')
<div class="container">
<div class="d-flex justify-content-between">
    <h1>Blog Posts</h1>
    {{-- <a href="/posts/create" class="btn btn-success pt-3">Create Post</a> --}}
</div>
<hr>
@if(count($posts) >= 1)
    @foreach($posts as $post)
    <div class="blog-post-container">
        <a href="/posts/{{$post->id}}">
            <div class="card rounded-0 my-5 showcase-left">
            <div class="card-header pb-1"><h4>{{$post->title}}</h4></div>
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
        </a>  
    </div>      
    @endforeach
    {{-- {{$posts->links()}} --}}
@else
    <p>No posts found</p>
@endif
</div>
@endsection