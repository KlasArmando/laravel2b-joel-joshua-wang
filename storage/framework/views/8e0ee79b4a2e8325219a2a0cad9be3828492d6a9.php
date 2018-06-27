
<nav class="navbar navbar-expand-md navbar-light navbar-laravel">

    <div class="container">
        <img class="logo" src="<?php echo e(asset('img/logo_colly-01.jpg')); ?>" alt="no" style="">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <div class="topnav">
                <ul class="navbar-nav mr-auto">


                        <li><a href="<?php echo e(URL::to('/')); ?>">Home</a></li>
                        <div class="dropdown">
                            <li><a href="<?php echo e(URL::to('/categories')); ?>">Categories</a></li>
                            <div class="dropdown-content">
                                <a href="<?php echo e(URL::to('/summer')); ?>">Summer</a>
                            </div>
                            <div class="dropdown-content" style="top: 100px;">
                                <a href="<?php echo e(URL::to('/winter')); ?>">Winter</a>
                            </div>
                        </div>
                        <li><a href="<?php echo e(URL::to('/posts/create')); ?>">Comment</a></li>
                        <li><a href="<?php echo e(URL::to('/posts')); ?>">User comments</a></li>
                        <li><a href="<?php echo e(URL::to('/contact')); ?>">Contact</a></li>
                        <li><a href="<?php echo e(URL::to('/about')); ?>">About</a></li>
                        <li><a href="<?php echo e(URL::to('/terms')); ?>">Terms and Privacy</a></li>




            </ul>
            </div>



            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                <?php if(auth()->guard()->guest()): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                    </li>
                <?php else: ?>

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <?php echo e(__('Logout')); ?>

                                <a href="<?php echo e(URL::to('/dashboard')); ?>" style="color:black;">Dashboard</a>
                            </a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form>

                        </div>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>