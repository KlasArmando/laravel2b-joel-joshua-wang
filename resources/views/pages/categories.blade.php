@extends('pages.layouts.app')

@section('content')
    <h1>All winter and summer sets</h1>
    <h1>Getting updated daily !</h1>
    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 11</div>
            <img src="{{asset('img/index.jpg')}}" style="width:200px;">
            <div class="text">This is the first simple set we have, You can wear this with every <weather></weather></div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 11</div>
            <img src="{{asset('img/hat.jpg')}}" style="width:500px;">
            <div class="text">First we go with the hat of the well famous Obey</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 11</div>
            <img src="{{asset('img/shirt.jpg')}}" style="width:500px;">
            <div class="text">Then the most simple of all the shirt we all have in our closet</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">4 / 11</div>
            <img src="{{asset('img/pants.jpg')}}" style="width:500px;">
            <div class="text">Easy pants</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">5 / 11</div>
            <img src="{{asset('img/skirtshirt.jpg')}}" style="width:500px;">
            <div class="text">This is for the women, what do you like the most comfortable ? Yes skirt and a shirt</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">6 / 11</div>
            <img src="{{asset('img/shirt2.jpg')}}" style="width:500px;">
            <div class="text">Let the people know what you have ! </div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">7 / 11</div>
            <img src="{{asset('img/skirt.jpg')}}" style="width:500px;">
            <div class="text">To give the shirts more power !</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">8 / 11</div>
            <img src="{{asset('img/dureset.jpg')}}" style="width:1000px;">
            <div class="text">These are for the people with an expensive taste</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">9 / 11</div>
            <img src="{{asset('img/sweater.jpg')}}" style="width:500px;">
            <div class="text">It looks cheap but don't get fooled!</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">10 / 11</div>
            <img src="{{asset('img/pants2.jpg')}}" style="width:500px;">
            <div class="text">Balmain</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">11 / 11</div>
            <img src="{{asset('img/shoes.jpg')}}" style="width:500px;">
            <div class="text">These shoes are Louis Vouitton</div>
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
            setTimeout(showSlides, 2250); // Change image every 2 seconds
        }
    </script>
@endsection