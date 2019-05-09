@extends('layouts.app')

@section('content')
<div class="container">
<hr>

<div class="d-flex justify-content-between">
    <h1>Dashboard</h1>
    <a href="/students/create" class="btn btn-success pt-3">Add Student</a>
</div>

<hr>

<form action=" {{route('import')}} " method="POST" enctype="multipart/form-data">
    <div class="d-flex">
        @csrf
        {{-- <input type="hidden" name="_token" value="{{ CSRF_Token() }}"> --}}
        <input type="file" name="import_file" class="form-control">
        <input type="submit" value="Upload" class="btn btn-info">
    </div>

</form>

<hr>

<div class="card rounded-0 showcase-right">
    <div class="card-header d-flex justify-content-between">
        <b class="pt-2">STUDENT LISTS</b><a href="{{ route('export') }}" class="btn btn-primary">Export to XLSX</a></div>
    <div class="card-body">

        <table class="table table-borderless table-hover showcase">

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
</div>
@endsection