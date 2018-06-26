@extends('pages.layouts.app')

@section('content')
    <h1> Create Admin  </h1>

    {!! Form::open(['action' => 'AdminController@storeTerms', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('terms', 'Terms')}}
        {{Form::textarea('terms', '', ['class' => 'form-control', 'placeholder'=>'Terms'])}}
    </div>


    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection