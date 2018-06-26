@extends('pages.layouts.app')

@section('content')
    <h1> Edit  </h1>

    {!! Form::open(['action' => ['AdminController@updateComment', $comment->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', $comment->title, ['class' => 'form-control', 'placeholder'=>'Title'])}}
    </div>

    <div class="form-group">
        {{Form::label('length', 'Length')}}
        {{Form::text('length', $comment->length, ['class' => 'form-control', 'placeholder'=>'Length'])}}
    </div>


    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection