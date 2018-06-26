@extends('pages.layouts.app')

@section('content')
    <h1> Edit  </h1>

    {!! Form::open(['action' => ['AdminController@updateUser', $user->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', $user->name, ['class' => 'form-control', 'placeholder'=>'Name'])}}
    </div>

    <div class="form-group">
        {{Form::label('email', 'Email')}}
        {{Form::text('email', $user->email, ['class' => 'form-control', 'placeholder'=>'Email'])}}
    </div>

    <div class="form-group">
        {{Form::label('password', 'Password')}}
        {{Form::text('password', $user->password, ['class' => 'form-control', 'placeholder'=>'Password'])}}
    </div>

    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}


@endsection