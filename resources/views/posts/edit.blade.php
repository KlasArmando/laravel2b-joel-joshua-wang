@extends('pages.layouts.app')

@section('content')
    <h1> Edit  </h1>

    {!! Form::open(['action' => ['PostsController@update', $posts->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', $posts->title, ['class' => 'form-control', 'placeholder'=>'title'])}}
    </div>

    <div class="form-group">
        {{Form::label('length', 'Length')}}
        {{Form::textarea('length', $posts->length, ['class' => 'form-control', 'placeholder'=>'Length'])}}
    </div>


    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection