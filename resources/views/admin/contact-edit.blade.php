@extends('pages.layouts.app')

@section('content')
    <h1> Edit  </h1>

    {!! Form::open(['action' => ['AdminController@updateContact', $admin->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', $admin->name, ['class' => 'form-control', 'placeholder'=>'Name'])}}
    </div>

    <div class="form-group">
        {{Form::label('email', 'Email')}}
        {{Form::text('email', $admin->email, ['class' => 'form-control', 'placeholder'=>'Email'])}}
    </div>

    <div class="form-group">
        {{Form::label('job_title', 'Job Title')}}
        {{Form::text('job_title', $admin->job_title, ['class' => 'form-control', 'placeholder'=>'Job Title'])}}
    </div>

    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection