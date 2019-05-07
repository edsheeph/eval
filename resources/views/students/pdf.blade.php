@extends('layouts.app')

@section('content')

{{-- https://github.com/barryvdh/laravel-dompdf/issues/269 --}}

<table class="table table-borderless table-hover">

    <thead class="thead-dark">
        <tr class="text-center"> 
            <th>Student Number</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
        </tr>
    </thead>
        <tr class="text-center">
            <td>{{$students->id}}</td>
            <td>{{$students->first_name}}</td>
            <td>{{$students->middle_name}}</td>
            <td>{{$students->last_name}}</td>
        </tr>

</table>

@endsection