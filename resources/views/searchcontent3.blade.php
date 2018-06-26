@include('pages.layouts.app')
@section('content')
@endsection

<table class="adminTable">
<div class="container">
    <div class="row" >
        <h1>Your Search Results matched with the name you have searched for</h1>

        <tr>
            <th>Created by</th>
            <th>Title</th>
            <th>Comment</th>
            <th>Created</th>
        </tr>

        @if(count($user)>0)
            @foreach($user as $users)
                <tr>
                    <td>{{$users->name}}</td>
                    <td>{{ $users->email }}</td>
                    <td>{{ $users->password }}</td>
                    <td>{{$users->created_at }}</td>
                </tr>
            @endforeach
        @endif
    </div>
</div>
</table>