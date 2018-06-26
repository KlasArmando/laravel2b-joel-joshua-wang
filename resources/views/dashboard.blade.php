@extends('pages.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div class="alert alert-success">
                           You are logged in as User
                        </div>

                    <div class="panel-body">

                        <a href="{!! url('posts/create')!!}" class="btn btn-primary">Create Comment</a>
                        <h3>Your comments</h3>
                        @if(count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>

                            </tr>


                                @foreach($posts as $post)
                                <tr>
                                    <th>{{$post->title}}</th>
                                    <th><a href="{{ url('posts/'.$post->id) }}/edit" class="btn btn-default">Edit Comment</a></th>

                                    <td>
                                        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                                @endforeach
                        </table>
                        @else
                            <p>You have no comments. Start commenting !</p>
                        @endif





                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
