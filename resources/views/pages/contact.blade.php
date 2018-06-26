@extends('pages.layouts.app')

@section('content')
    <h1> Contact us!  </h1>

    {!! Form::open(['action' => 'PagesController@store', 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('name', 'Full Name')}}
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder'=>'Full Name'])}}
    </div>

    <div class="form-group">
        {{Form::label('email', 'E-mail')}}
        {{Form::text('email', '', ['class' => 'form-control', 'placeholder'=>'E-mail'])}}
    </div>

    <div class="form-group">
        {{Form::label('message', 'Message')}}
        {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder'=>'message'])}}
    </div>



    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection