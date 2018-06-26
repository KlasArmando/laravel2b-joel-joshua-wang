@extends('pages.layouts.app')
@section('content')

    {{--Dit is de page voor de about pagina--}}
    <table class="adminTable">
    <a href="{{ url('about/') }}" class="btn btn-default">Go back</a><br/>
        {{--Hier maken we een about aan--}}
        <a href="{{ URL::to('/about/create') }}" class="btn btn-default">Create About</a>
    @foreach ($about as $abouts)
            <tr>
                <th>About</th>
                <th></th>
                <th></th>

            </tr>


    <hr>
<tr>
    {{--De about text die op de about pagina zetten--}}
           <th> {{ $abouts->text }}</th>

            {{--Hier kunnen we onze about pagina editten--}}
           <td><a href="{{ url('about/'.$abouts->id) }}/edit" class="btn btn-default">Edit</a></td>
           {{--Hier kunnen we de about page deleten--}}
    <td> {!! Form::open([
                'method' => 'DELETE',
                'route' => ['admin.destroy', $abouts->id],
                'class' => 'delete'
            ]) !!}

            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}

               <script>
                   $(".delete").on("submit", function(){
                       return confirm("Do you want to delete this item?");
                   });
               </script>
           </td>
        </tr>
    @endforeach
    </table>
@endsection