@extends('pages.layouts.app')

@section('content')
    <h1> Create Comment for Admins  </h1>

    {!! Form::open(['action' => 'AdminController@storeComment', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder'=>'Title'])}}
    </div>

    <div class="form-group">
        {{Form::label('length', 'Length')}}
        {{Form::text('length', '', ['class' => 'form-control', 'placeholder'=>'length'])}}
    </div>



    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!!Form::close() !!}
@endsection