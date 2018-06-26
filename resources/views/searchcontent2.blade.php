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

        @if(count($posts)>0)
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->user->name}}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->length }}</td>
                    <td>{{$post->created_at }}</td>
                </tr>
            @endforeach
        @endif
    </div>
</div>
</table>