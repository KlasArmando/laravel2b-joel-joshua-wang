@extends('pages.layouts.app')

@section('content')
    <h1> Edit  </h1>

    {!! Form::open(['action' => ['AdminController@updateTerms', $terms->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('terms', 'Terms')}}
        {{Form::textarea('terms', $terms->terms, ['class' => 'form-control', 'placeholder'=>'Terms'])}}
    </div>

    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection