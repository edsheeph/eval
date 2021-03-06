    {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
        <a class="navbar-brand" href="/">FirstTask</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            
        </div>
        </div>
    </nav> --}}

    <nav class="navbar navbar-expand-lg navbar-light p-3 mb-5 bg-light fixed-top">
        <div class="container-fluid">
            <div class="d-flex justify-content-between">
                <a class="navbar-brand font-italic" href="{{ url('/') }}">
                    <img src="/images/logo.png" width="15%"> {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <ul class="nav navbar-nav">
                    <li class="{{Request::is('/') ? 'active' : ''}}">
                        <a class="nav-link font-weight-bold" href="/">Home</a>
                    </li>
                    <li class="{{Request::is('about') ? 'active' : ''}}">
                        <a class="nav-link font-weight-bold" href="/about">About</a>
                    </li>
                    <li class="{{Request::is('services') ? 'active' : ''}}">
                        <a class="nav-link font-weight-bold" href="/services">Service</a>
                    </li>
                    <li class="{{Request::is('posts') ? 'active' : ''}}">
                        <a class="nav-link font-weight-bold" href="/posts">Blog</a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle font-weight-bold" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/students">Dashboard</a>
                                <a class="dropdown-item" href="/blog">Blog</a>

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
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