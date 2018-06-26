@include('pages.layouts.app')
@section('content')
@endsection

<table class="adminTable">
<div class="container">
    <div class="row" >
        <h1>Your Search Results matched with the name you have searched for</h1>
        @if(count($admin)>0)
            @foreach($admin as $admins)
                <th>{{ $admins->id }}</th>
                <th>{{ $admins->name }}</th>
                <th>{{$admins->email }}</th>
            @endforeach
        @endif
    </div>
</div>
</table>