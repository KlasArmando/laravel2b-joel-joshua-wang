@extends('pages.layouts.app')

@section('content')
    <h1> Create  </h1>

    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('length', 'Message')}}
            {{Form::textarea('length', '', ['class' => 'form-control', 'placeholder'=>'Length', 'maxlength' => 191 ])}}
        </div>

        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder'=>'title'])}}
        </div>

    <div class="form-group">
        {{Form::file('cover_image')}}
    </div>

            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection