@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between">
    <h1>Dashboard</h1>
    <a href="/students/create" class="btn btn-success pt-3">Add Student</a>
</div>

<hr>

<div class="card rounded-0">
    <div class="card-header"><b>STUDENT LISTS</b></div>
    <div class="card-body">
        <table class="table table-borderless table-hover">

            <thead class="thead-dark">
                <tr class="text-center"> 
                    <th>Student Number</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Action</th>
                </tr>
            </thead>

            @if(count($students) >= 1)
                @foreach($students as $student)

                <tr class="text-center">
                    <td>{{$student->id}}</td>
                    <td>{{$student->first_name}}</td>
                    <td>{{$student->middle_name}}</td>
                    <td>{{$student->last_name}}</td>
                    <td><a href="/students/{{$student->id}}" class="btn btn-dark btn-sm">View</a>
                        <a href="{{url('students/generatePDF/' . $student->id)}}" class="btn btn-danger btn-sm">Export To PDF</a></td>
                </tr>
                
                @endforeach
                {{-- {{$posts->links()}} --}}
            @else
                <p>No Students found</p>
            @endif

        </table>
    </div>
</div>

@endsection