@extends('layouts.app')

@section('content')

{{-- https://github.com/barryvdh/laravel-dompdf/issues/269 --}}

<div class="card my-3">
    <div class="card-body">

        <h1 class="text-center">Student Info</h1>
        <p>Student Number: {{$students->id}}</p>
        <p>Name: {{$students->first_name}} {{$students->middle_name}} {{$students->last_name}}</p>
        <p>Gender: {{$students->gender}}</p>
        <p>Address: {{$students->address}}</p>
        <p>Contact Number: {{$students->number}}</p>
        <p>Birthday: {{$students->birth_date}}</p>
        <p>Age: {{$students->age}}</p>
        
    </div>
</div>  

@endsection