<header class="my_header p-3 mb-3 border-bottom">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{route('home')}}" class="nav-link px-2 link-dark">Home</a></li>
                <li><a href="{{route('products.index')}}" class="nav-link px-2 link-dark">Products</a></li>
            </ul>
             
            @guest
               
                    <a class="nav-link link-dark" href="{{ route('login') }}">{{ __('Login') }}</a>
               
                @if (Route::has('register'))
                    
                    <a class="nav-link link-dark" href="{{ route('register') }}">{{ __('Register') }}</a>
                   
                @endif
            @else
                    <div class="dropdown text-end">
                        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                            {{Auth::user()->name}}
                        </a>
                        <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                            <li><a class="dropdown-item" href="#">Dashboard</a></li>

                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                                </a>
                             
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
            @endguest

        </div>
    </div>
</header>