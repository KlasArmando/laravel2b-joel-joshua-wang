@extends('pages.layouts.app')
@section('content')

<div class="row">
    <div class="side">

        <h3>Welcome to Colly</h3>
        <p>Do you ever get tired of searching for the fitting clothes? stop at Colly you will find your fitting style</p>
        <div class="clothing">
         <img style="top: 10px;" src="{{asset('img/hat.jpg')}}"/>
        </div>
        <div class="clothing">
            <img style="" src="{{asset('img/shirt.jpg')}}"/>
        </div>
        <div class="clothing">
            <img style="bottom: 10px;" src="{{asset('img/pants.jpg')}}"/>
        </div>
    <div class="main">
        <h2>Click <a href="{{url("/categories")}}"> here</a> to get started </h2>
        <h5> </h5>
        {{--<div class="collyimg" style="height:200px;">Image</div>--}}
        <p></p>
        <p> .</p>
        <br>
    </div>
    </div>
</div>
    @endsection