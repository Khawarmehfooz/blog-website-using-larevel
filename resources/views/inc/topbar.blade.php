{{-- <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <h4>Blogpedia</h4>
      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/" class="nav-link px-2 link-secondary">Home</a></li>
        <li><a href="/blog" class="nav-link px-2 link-dark">Blog</a></li>
        <li><a href="/about" class="nav-link px-2 link-dark">About</a></li>
      </ul>
      <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-primary me-2">Create Post</button>
        <button type="button" class="btn btn-primary">Sign-up</button>
      </div>
    </header>
  </div> --}}

  {{-- <div class="container">
    <header class="py-3">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
          <a href="#" class="link-secondary">Subscribe</a>
        </div>
        <div class="col-4 text-center">
          <a href="#" class="text-dark fs-2">Blogpedia</a>
        </div>

        <div class="col-4 d-flex justify-content-end align-items-center">

          <a href="/register" class="btn btn-sm btn-outline-secondary">Sign Up</a>
        </div>
      </div>
      <hr>
      <div class="container">
        <div class="">
          <nav class="nav d-flex justify-content-center">
              <a href="/posts" class="p-2 link-secondary">Blog</a>
              <a href="/about" class="p-2 link-secondary">About</a>
              <a href="/contact" class="p-2 link-secondary">Contact Us</a>
              <a href="/authors" class="p-2 link-secondary">Authors</a>
          </nav>
        </div>
      </div>
      <hr>
    </header>
  </div>--}}
  <div class="container">
  <nav class="navbar navbar-expand-md navbar-light">
            <div class="container py-2 d-flex">
              <div class="pt-1">
                <a href="#" class="link-secondary">Subscribe</a>
              </div>
                <a class="px-auto navbar-brand fs-2" href="{{ url('/') }}">
                    {{ config('app.name', 'Blogpedia') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" style="flex-grow: 0;" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="/home">Dashboard</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <hr>
</div>
<div class="container">
        <div class="">
          <nav class="nav d-flex justify-content-center">
              <a href="/posts" class="p-2 link-secondary">Posts</a>
              <a href="/about" class="p-2 link-secondary">About</a>
              <a href="/contact" class="p-2 link-secondary">Contact Us</a>
          </nav>
        </div>
      <hr>
</div>