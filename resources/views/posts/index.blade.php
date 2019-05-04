@extends('layouts.app')

@section('content')

        <div class="d-flex justify-content-between">
            <h1>Posts</h1>
            <a href="/posts/create" class="btn btn-primary pt-3">Create Post</a>
        </div>
        @if(count($posts) > 1)
            @foreach($posts as $post)
                <div class="card my-3">
                <div class="card-header pb-1"><h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3></div>
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

@endsection

{{-- <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>form practice</title>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script>
            $(document).ready(function(){
        
                $("#dob").change(function(){
                   var value = $("#dob").val();
                    var dob = new Date(value);
                    var today = new Date();
                    var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
                    if(isNaN(age)) {
        
                    // will set 0 when value will be NaN
                     age=0;
        
                    }
                    else{
                      age=age;
                    }
                    $('#age').val(age);
        
                });
        
            });
            </script>
        </head>
        
        <body>
        
        <div class="form2" id="form2" name="form2">
        
        <form action="php/form2.php" method="post" id="Personalinfo">
        
        <label for="fname">Name:</label>
        <input type="text" id="fname" name="firstname" placeholder="Client 
        Name..">
        
        <label for="lname">Lastname:</label>
        <input type="text" id="lname" name="lastname" placeholder="Client 
        Lastname..">
        
        <label for="dob">Birthday:</label>
        <input type="text" id="dob" name="dob" placeholder="yyyy/mm/dd..">
        
        <label for="age">Age:</label>
        <input type="text" id="age" name="age" placeholder="Client Age..">
        
        <input type="submit" name="submitForm2" value="Submit">
        
        
        </form>
        </div>
        
        </body>
    </html> --}}