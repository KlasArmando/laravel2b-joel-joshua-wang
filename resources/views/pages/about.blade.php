@extends('pages.layouts.app')
@section('content')
<h1>About Colly</h1>

<p style="text-align: center; width: 500px;position: absolute; top: 20em; left: 28em;">

    @foreach($about as $text)
        <tr>
            <div class="terms">
            <th>{{$text->text}}</th>
            </div>
    @endforeach
</p>

@endsection