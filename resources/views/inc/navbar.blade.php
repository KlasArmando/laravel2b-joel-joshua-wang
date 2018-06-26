
<nav class="navbar navbar-expand-md navbar-light navbar-laravel">

    <div class="container">
        <img class="logo" src="{{ asset('img/logo_colly-01.jpg') }}" alt="no" style="">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <div class="topnav">
                <ul class="navbar-nav mr-auto">


                        <li><a href="{{ URL::to('/') }}">Home</a></li>
                        <div class="dropdown">
                            <li><a href="{{ URL::to('/categories') }}">Categories</a></li>
                            <div class="dropdown-content">
                                <a href="{{ URL::to('/summer') }}">Summer</a>
                            </div>
                            <div class="dropdown-content" style="top: 100px;">
                                <a href="{{ URL::to('/winter') }}">Winter</a>
                            </div>
                        </div>
                        <li><a href="{{ URL::to('/posts/create') }}">Comment</a></li>
                        <li><a href="{{ URL::to('/posts') }}">User comments</a></li>
                        <li><a href="{{ URL::to('/contact') }}">Contact</a></li>
                        <li><a href="{{ URL::to('/about') }}">About</a></li>
                        <li><a href="{{ URL::to('/terms') }}">Terms and Privacy</a></li>




            </ul>
            </div>



            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @else

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                                <a href="{{ URL::to('/dashboard') }}" style="color:black;">Dashboard</a>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>