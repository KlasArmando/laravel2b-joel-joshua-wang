@extends('pages.layouts.app')
@section('content')
    <h1>Create About</h1>

    {!! Form::open(['action' => 'AdminController@storeAbout', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('text', 'Text')}}
            {{Form::textarea('text', '', ['class' => 'form-control', 'placeholder'=>'Text'])}}
        </div>


            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection