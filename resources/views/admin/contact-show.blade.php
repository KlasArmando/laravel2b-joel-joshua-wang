@extends('pages.layouts.app')

@section('content')
    <form class="navbar-form" role="search" method="GET" action="{{url("searchcontent3")}}">
        <div class="input-group">
            <input type="text" class="" placeholder="Search by Name" name="name">
            <div class="input-group-btn">
                <button class="" type="submit">GO<i class=""></i></button>
            </div>
        </div>
    </form>

    <table class="adminTable">
    <a href="{{ url('admin/') }}" class="btn btn-default">Go back</a><br/>
        <a href="{{ URL::to('/admin/create') }}" class="btn btn-default">All contact</a>

    @foreach ($allcontact as $allcontacts)
            <tr>
                <th>Name</th>
                <th>E-mail</th>
                <th>message</th>

            </tr>



<tr>
           <th> {{ $allcontacts->name }}</th>
           <th> {{ $allcontacts->email }}</th>
           <th> {{ $allcontacts->message }}</th>


    @endforeach
    </table>
@endsection