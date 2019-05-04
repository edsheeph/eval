    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
        <a class="navbar-brand" href="/">FirstTask</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="{{Request::is('/') ? 'active' : ''}}">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="{{Request::is('about') ? 'active' : ''}}">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="{{Request::is('services') ? 'active' : ''}}">
                    <a class="nav-link" href="/services">Services</a>
                </li>
                <li class="{{Request::is('posts') ? 'active' : ''}}">
                    <a class="nav-link" href="/posts">Blog</a>
                </li>
                {{-- <li class="{{Request::is('#') ? 'active' : ''}}">
                    <a class="nav-link" href="#">Login</a>
                </li>
                <li class="{{Request::is('#') ? 'active' : ''}}">
                    <a class="nav-link" href="#">Register</a>
                </li> --}}
            </ul>
            
        </div>
        </div>
    </nav>