@extends('layouts.app')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
    $(document).ready(function(){

        $("#birth_date").change(function(){
           var value = $("#birth_date").val();
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
<div class="container">
<a href="/students" class="btn btn-dark mb-3">Go Back</a>
<div class="card">
    <div class="card-header pb-1"><h1>Add Student</h1></div>
    <div class="card-body">
        {!! Form::open(['action' => ['StudentController@update', $student->id], 'method' => 'POST']) !!} 

            <div class="form-row">
                <div class="col-4">
                    <div class="form-group">
                        {{Form::label('first_name', 'First Name')}}
                        {{Form::text('first_name', $student->first_name, ['class' => 'form-control', 'placeholder' => 'First Name'])}}
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        {{Form::label('middle_name', 'Middle Name')}}
                        {{Form::text('middle_name', $student->middle_name, ['class' => 'form-control', 'placeholder' => 'Middle Name'])}}
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        {{Form::label('last_name', 'Last Name')}}
                        {{Form::text('last_name', $student->last_name, ['class' => 'form-control', 'placeholder' => 'Last Name'])}}
                    </div>
                </div>
            </div> 
            <div class="form-row">
                <div class="col-4">
                    <div class="form-group">
                        {{Form::label('gender', 'Gender')}}
                        {{Form::text('gender', $student->gender, ['class' => 'form-control', 'placeholder' => 'Gender'])}}
                    </div>
                </div>
                <div class="col-8">
                    <div class="form-group">
                        {{Form::label('address', 'Address')}}
                        {{Form::text('address', $student->address, ['class' => 'form-control', 'placeholder' => 'Address'])}}
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-4">
                    <div class="form-group">
                        {{Form::label('number', 'Contact Number')}}
                        {{Form::number('number', $student->number, ['class' => 'form-control', 'placeholder' => 'Contact Number'])}}
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        {{Form::label('birth_date', 'Birthday')}}
                        {{Form::date('birth_date', $student->birth_date, ['class' => 'form-control', 'placeholder' => 'Birthday'])}}
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        {{Form::label('age', 'Age')}}
                        {{Form::text('age', $student->age, ['class' => 'form-control', 'placeholder' => 'Age'])}}
                    </div>
                </div>
            </div> 
            
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Update', ['class' => 'btn btn-success px-3'])}}
        {!! Form::close() !!}
    </div>
</div>
</div>     
@endsection