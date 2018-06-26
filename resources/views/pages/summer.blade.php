@extends('pages.layouts.app')

@section('content')
    <h1>Summer sets</h1>
    <h1>Getting updated daily !</h1>

    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 11</div>
            <img src="{{asset('img/summerset1.jpg')}}" style="width:1000px;">
            <div class="text">We will kick off with the summer set for the women</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 11</div>
            <img src="{{asset('img/womentop.jpg')}}" style="width:500px;">
            {{--<div class="text">Caption Two</div>--}}
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 11</div>
            <img src="{{asset('img/short.jpg')}}" style="width:500px;">
            {{--<div class="text">Caption Two</div>--}}
        </div>

        <div class="mySlides fade">
            <div class="numbertext">4 / 11</div>
            <img src="{{asset('img/sandal.jpg')}}" style="width:500px;">
            {{--<div class="text">Caption Three</div>--}}
        </div>

        <div class="mySlides fade">
            <div class="numbertext">5 / 11</div>
            <img src="{{asset('img/skirtshirt.jpg')}}" style="width:500px;">
            {{--<div class="text">Caption Two</div>--}}
        </div>

        <div class="mySlides fade">
            <div class="numbertext">6 / 11</div>
            <img src="{{asset('img/shirt2.jpg')}}" style="width:500px;">
            {{--<div class="text">Caption Two</div>--}}
        </div>

        <div class="mySlides fade">
            <div class="numbertext">7 / 11</div>
            <img src="{{asset('img/skirt.jpg')}}" style="width:500px;">
            {{--<div class="text">Caption Three</div>--}}
        </div>

        <div class="mySlides fade">
            <div class="numbertext">8 / 11</div>
            <img src="{{asset('img/dureset.jpg')}}" style="width:1000px;">
            {{--<div class="text">Caption Three</div>--}}
        </div>

        <div class="mySlides fade">
            <div class="numbertext">9 / 11</div>
            <img src="{{asset('img/sweater.jpg')}}" style="width:500px;">
            {{--<div class="text">Caption Two</div>--}}
        </div>

        <div class="mySlides fade">
            <div class="numbertext">10 / 11</div>
            <img src="{{asset('img/pants2.jpg')}}" style="width:500px;">
            {{--<div class="text">Caption Two</div>--}}
        </div>

        <div class="mySlides fade">
            <div class="numbertext">11 / 11</div>
            <img src="{{asset('img/shoes.jpg')}}" style="width:500px;">
            {{--<div class="text">Caption Three</div>--}}
        </div>



    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>

    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>


@endsection