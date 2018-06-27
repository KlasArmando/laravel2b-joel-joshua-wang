<?php $__env->startSection('content'); ?>
    <h1>All winter and summer sets</h1>

    <div class="slideshow-container">

        <div class="mySlides2 fade">
            <div class="numbertext">1 / 3</div>
            <img src="<?php echo e(asset('img/hat.jpg')); ?>" style="width:100%">
            <div class="text">Caption Text</div>
        </div>

        <div class="mySlides2 fade">
            <div class="numbertext">2 / 3</div>
            <img src="<?php echo e(asset('img/shirt.jpg')); ?>" style="width:100%">
            <div class="text">Caption Two</div>
        </div>

        <div class="mySlides2 fade">
            <div class="numbertext">3 / 3</div>
            <img src="<?php echo e(asset('img/pants.jpg')); ?>" style="width:100%">
            <div class="text">Caption Three</div>
        </div>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>


    <script>

        var slideIndexx = 0;
        showSlidess();

        function showSlidess() {
            var i;
            var slidess = document.getElementsByClassName("mySlide2");
            for (i = 0; i < slidess.length; i++) {
                slidess[i].style.display = "none";
            }
            slideIndexx++;
            if (slideIndexx > slidess.length) {slideIndexx = 1}
            slidess[slideIndexx-1].style.display = "block";
            setTimeout(showSlidess, 5500); // Change image every 2 seconds
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>