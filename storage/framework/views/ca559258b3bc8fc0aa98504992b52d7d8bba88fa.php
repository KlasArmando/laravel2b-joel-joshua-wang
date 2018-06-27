<?php $__env->startSection('content'); ?>
    <h1>Wintersets sets</h1>
    <h1>Getting updated daily !</h1>

    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 11</div>
            <img src="<?php echo e(asset('img/winterset.jpg')); ?>" style="width:500px;">
            
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 11</div>
            <img src="<?php echo e(asset('img/canadagoose.jpg')); ?>" style="width:500px;">
            
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 11</div>
            <img src="<?php echo e(asset('img/sweater2.jpg')); ?>" style="width:500px;">
            
        </div>

        <div class="mySlides fade">
            <div class="numbertext">4 / 11</div>
            <img src="<?php echo e(asset('img/balmain.jpg')); ?>" style="width:500px;">
            
        </div>

        <div class="mySlides fade">
            <div class="numbertext">5 / 11</div>
            <img src="<?php echo e(asset('img/winterset2.jpg')); ?>" style="width:500px;">
            
        </div>

        <div class="mySlides fade">
            <div class="numbertext">6 / 11</div>
            <img src="<?php echo e(asset('img/womencanada.jpg')); ?>" style="width:500px;">
            
        </div>

        <div class="mySlides fade">
            <div class="numbertext">7 / 11</div>
            <img src="<?php echo e(asset('img/winterpants.jpg')); ?>" style="width:500px;">
            
        </div>

        <div class="mySlides fade">
            <div class="numbertext">8 / 11</div>
            <img src="<?php echo e(asset('img/uggs.jpg')); ?>" style="width:500px;">
            
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>