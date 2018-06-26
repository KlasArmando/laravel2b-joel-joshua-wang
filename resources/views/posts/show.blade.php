@extends('pages.layouts.app')

@section('content')
    <a href="{{ url('posts/') }}" class="btn btn-default">Go back</a>
    <h1> {{$posts->email}} </h1>

   <div>
       {{$posts->message}}
   </div>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
    <a href="{{ url('posts/'.$posts->id) }}/edit" class="btn btn-default">Edit</a>

    {!! Form::open([
        'method' => 'DELETE',
        'route' => ['posts.destroy', $posts->id],

    ]) !!}
    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
            @endif
@endif

@endsection