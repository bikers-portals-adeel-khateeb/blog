<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
     
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'biker-portal') }} --}}
                    <button type="button" class="btn btn-outline-warning"
                     style="font-weight: bold;">ᛒ℘</button>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"> </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto navbar-left" id="myDIV">
                        <li class="nav-item active nav-left">
     <a class="nav-link" href="{{ route('bikes') }}">  {{ __('Bikes') }}  </a>
                        </li>
                        <li class="nav-item nav-left">
                                <a class="nav-link" href="{{ route('parts') }}">{{ __('Parts') }}</a>
                        </li>
                        <li class="nav-item nav-left">
                                <a class="nav-link" href="{{ route('accessories') }}">{{ __('Accessories') }}</a>
                        </li>
                        <li class="nav-item nav-left">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Rent') }}</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item nav-right">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item nav-right">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                                <li class="nav-item nav-right">
                                    <a class="nav-link" href="{{ route('register') }}">
                                    <i class="fas fa-shopping-cart"></i> {{ __('Cart') }}</a>
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
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
          
        </nav>


        
