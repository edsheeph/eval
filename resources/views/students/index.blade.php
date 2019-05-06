@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between">
    <h1>Dashboard</h1>
    <a href="/students/create" class="btn btn-success pt-3">Add Student</a>
</div>

<hr>

<div class="row mx-auto">

@if(count($students) >= 1)
    @foreach($students as $student)
    <div class="col-4">
        <div class="card my-3">
        <div class="card-header"><div class="d-flex justify-content-end"><a href="/students/{{$student->id}}" class="btn btn-primary btn-sm">View</a></div></div>
            <div class="card-body">
                <p>Student Number: {{$student->id}}</p>
                <p>Name: {{$student->first_name}} {{$student->middle_name}} {{$student->last_name}}</p>
            </div>
        </div> 
    </div>         
        
    @endforeach
    {{-- {{$posts->links()}} --}}
@else
    <p>No Students found</p>
@endif

</div>

@endsection