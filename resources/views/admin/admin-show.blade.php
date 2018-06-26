@extends('pages.layouts.app')

@section('content')
    <form class="navbar-form" role="search" method="GET" action="{{url("searchcontent")}}">
        <div class="input-group">
            <input type="text" class="" placeholder="Search by name" name="name">
            <div class="input-group-btn">
                <button class="" type="submit">GO<i class=""></i></button>
            </div>
        </div>
    </form>

    <table class="adminTable">
    <a href="{{ url('admin/') }}" class="btn btn-default">Go back</a><br/>
        <a href="{{ URL::to('/admin/create') }}" class="btn btn-default">Create  Admin</a>

    @foreach ($admin as $admins)
            <tr>
                <th>Name</th>
                <th>E-mail</th>
                <th>Job Title</th>

            </tr>



<tr>
           <th> {{ $admins->name }}</th>
           <th> {{ $admins->email }}</th>
           <th> {{ $admins->job_title }}</th>

           <td><a href="{{ url('admin/'.$admins->id) }}/edit" class="btn btn-default">Edit</a></td>


    <td> {!! Form::open([
                'method' => 'DELETE',
                'route' => ['admin.destroyAdmin', $admins->id],
                'class' => 'delete'
            ]) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
           </td>
        </tr>
            <script>
                $(".delete").on("submit", function(){
                    return confirm("Do you want to delete this item?");
                });
            </script>
    @endforeach
    </table>
@endsection