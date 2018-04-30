<div class="collapse navbar-collapse" id="navbarSupportedContent">
        
    <nav class="" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- a class="navbar-brand" href="#"><img class="img-responsive" alt="" src="images/logo-skapada.png"></a -->
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <!-- mega menu -->
            <ul class="sky-mega-menu sky-mega-menu-top sky-mega-menu-response-to-icons blanco">
 
                <li class="active"><a href="{{ url('/') }}"><i class="fa fa-home"></i> {{ config('app.name', 'Laravel') }}</a></li>                            
                <li  class="nav-item dropdown" Saria-haspopup="true">
                    <a class="nav-link " role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  href="{{route('channels.index')}}"><i class="fa fa-play-circle"></i> Channels</a>    
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a  class="dropdown-item" href="{{route('categories.index')}}">Categories</a>
                    </div>
                </li>

        
                <div class="pull-right">
                    @guest
                        <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('dashboard') }}">
                                    Admin
                                </a>
                                <a class="dropdown-item" href="{{route('user', Auth::user()->slug )}}">
                                    User area
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </div>
            </ul>
            
        </div>
    <!-- /.navbar-collapse -->
    </nav>
</div>