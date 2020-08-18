<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand" href="{{url("/")}}">shefa group</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">
          <ul class="navbar-nav">
            <li class="nav-item active">
            <a class="nav-link" href="{{url("/posts")}}">{{__('lang.posts')}} <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url("/about")}}">{{__('lang.about')}}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url("/resource")}}">{{__('lang.resources')}}</a>
            </li>
            @auth
           
            <li class="nav-item">
              <a class="nav-link" href="{{url("/posts/create")}}">{{__('lang.createpost')}}</a>
            </li>
          
            @endauth
           
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{__('lang.dropdown')}}
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{url('/lang/en')}}" >en</a>
                <a class="dropdown-item" href="{{url('/lang/ar')}}" >ar</a>
               
              <a class="dropdown-item" href="/">google</a>
              </div>
            </li>
          </ul>
        </ul>
  
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
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
                        <a class="dropdown-menu dropdown-menu-right"aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{url("/dashbord")}}">Dashboard</a>
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