@extends('layouts.app')

@section('content')
<div class="container">
<a href="/students" class="btn btn-dark">Go Back</a>
<div class="card my-3 info-left">
    <div class="card-body">
        <p>Name: {{$student->first_name}} {{$student->middle_name}} {{$student->last_name}}</p>
        <p>Gender: {{$student->gender}}</p>
        <p>Address: {{$student->address}}</p>
        <p>Contact Number: {{$student->number}}</p>
        <p>Birthday: {{$student->birth_date}}</p>
        <p>Age: {{$student->age}}</p>
        
    </div>
</div>  

<hr>

<div class="d-flex justify-content-end">

<a href="/students/{{$student->id}}/edit" class="btn btn-primary mr-3">Edit</a>
{{-- <a href="/posts/{{$post->id}}/delete" class="btn btn-danger">Delete</a>   --}}

{!! Form::open(['action' => ['StudentController@destroy', $student->id], 'method' => 'POST']) !!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{!! Form::close() !!}

</div>
</div>
@endsection