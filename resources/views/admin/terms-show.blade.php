@extends('pages.layouts.app')

@section('content')
    <table class="adminTable">
    <a href="{{ url('terms/') }}" class="btn btn-default">Go back</a><br/>
        <a href="{{ URL::to('/terms/create') }}" class="btn btn-default">Create Term</a>
    @foreach ($terms as $term)
            <tr>
                <th>Terms</th>
                <th></th>
                <th></th>

            </tr>


    <hr>
<tr>

           <th> {{ $term->terms }}</th>

           <td><a href="{{ url('termsIndex/'.$term->id) }}/edit" class="btn btn-default">Edit</a></td>
           <td> {!! Form::open([
                'method' => 'DELETE',
                'route' => ['admin.destroyTerms', $term->id],
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