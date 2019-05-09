@extends('layouts.app')

@section('content')
<div class="container">
<a href="/students" class="btn btn-dark rounded-0">Go Back</a>
<div class="card rounded-0 my-3 info-left">
    <div class="card-header pb-2"><b class="font-weight-bold">STUDENT INFO</b></div>
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

<a href="/students/{{$student->id}}/edit" class="btn btn-primary mr-3 px-4 rounded-0">Edit</a>
{{-- <a href="/posts/{{$post->id}}/delete" class="btn btn-danger">Delete</a>   --}}

{!! Form::open(['action' => ['StudentController@destroy', $student->id], 'method' => 'POST']) !!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger px-3 rounded-0'])}}
{!! Form::close() !!}

</div>
</div>
@endsection