@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="card rounded-0 showcase-bottom">
        <div class="card-header d-flex justify-content-between"><b class="pt-2">YOUR BLOG POST(S)</b><a href="/posts/create" class="btn btn-success rounded-0">Create Post</a></div>
        <div class="card-body">
            @if(count($posts) > 0)
                <table class="table table-hover table-borderless">
                    <thead class="thead-dark">
                        <tr>
                            <th>Title</th>
                            <th>Body</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td>{{$post->body}}</td>
                            <td class="d-flex">
                                <a href="/posts/{{$post->id}}/edit" class="btn btn-primary rounded-0 btn-sm mr-2">Edit</a>
                                {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST']) !!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger btn-sm rounded-0'])}}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </table>
            @else
                <p>You have no Posts</p>
            @endif
        </div>
    </div>
       
</div>
@endsection