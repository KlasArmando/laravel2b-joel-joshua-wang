@extends('pages.layouts.app')

@section('content')
    <h1> Create Admin  </h1>

    {!! Form::open(['action' => 'AdminController@storeAdmin', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder'=>'Name'])}}
    </div>

    <div class="form-group">
        {{Form::label('email', 'Email')}}
        {{Form::text('email', '', ['class' => 'form-control', 'placeholder'=>'Email'])}}
    </div>

    <div class="form-group">
        {{Form::label('password', 'Password')}}
        {{Form::password('password', ['class' => 'form-control', 'placeholder'=>'Password'])}}
    </div>

    <div class="form-group">
        {{Form::label('job_title', 'Job Title')}}
        {{Form::text('job_title', '', ['class' => 'form-control', 'placeholder'=>'Job title'])}}
    </div>


    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection