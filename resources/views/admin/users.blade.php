@extends('pages.layouts.app')

@section('content')
    <form class="navbar-form" role="search" method="GET" action="{{url("searchcontent3")}}">
        <div class="input-group">
            <input type="text" class="" placeholder="Search by name" name="name">
            <div class="input-group-btn">
                <button class="" type="submit">GO<i class=""></i></button>
            </div>
        </div>
    </form>
    <script>

        function ConfirmDelete()
        {
            var x = confirm("Are you sure you want to delete?");
            if (x)
                return true;
            else
                return false;
        }

    </script>

    <table class="adminTable">
        <a href="{{ url('admin/') }}" class="btn btn-default">Go back</a><br/>
        {{--<a href="{{ URL::to('/admin/create') }}" class="btn btn-default">Create  Admin</a>--}}

        @foreach ($user as $users)
            <tr>
                <th>Name</th>
                <th>E-mail</th>
                <th>password</th>

            </tr>



            <tr>
                <th> {{ $users->name }}</th>
                <th> {{ $users->email }}</th>
                <th> {{ $users->password }}</th>

                <td><a href="{{ url('user/'.$users->id) }}/edit" class="btn btn-default">Edit</a></td>
                <td> {!! Form::open([
                'method' => 'DELETE',
                'route' => ['admin.destroyUser', $users->id],
                'class'=> 'delete'
            ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger'], [ 'onsubmit' => 'return ConfirmDelete()'])!!}
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