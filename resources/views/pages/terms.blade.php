@extends('pages.layouts.app')

@section('content')
    <h1>These are our terms</h1>

    <p style="text-align: center; width: 500px;position: absolute; top: 20em; left: 28em;">

        @foreach($terms as $term)
            <tr>
                <div class="terms">
                <th>{{$term->terms}}</th>
                </div>
        @endforeach
    </p>

@endsection