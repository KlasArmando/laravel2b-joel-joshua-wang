@extends('pages.layouts.app')

@section('content')
    {{--Dit is de pagina om een comment te plaatsen voor de andere admins--}}
    <table class="adminTable">
    <a href="{{ url('admin/') }}" class="btn btn-default">Go back</a><br/>
        <a href="{{ URL::to('/comment/create') }}" class="btn btn-default">Create comment for other Admins</a>
    @foreach ($comment as $comments)
            <tr>
                <th>Title</th>
                <th>Message</th>
                <th></th>

            </tr>
    <hr>
<tr>
           <th> {{ $comments->title }}</th>
           <th> {{ $comments->length }}</th>


           <td><a href="{{ url('comment/'.$comments->id) }}/edit" class="btn btn-default">Edit</a></td>
           <td> {!! Form::open([
                'method' => 'DELETE',
                'route' => ['admin.destroyComment', $comments->id],
                'class' => 'delete'
            ]) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
           </td>
        </tr>
    @endforeach
        <script>
            $(".delete").on("submit", function(){
                return confirm("Do you want to delete this item?");
            });
        </script>
    </table>
@endsection