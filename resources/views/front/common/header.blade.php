<header class="header">
    <div class="container">
      <div class="logo">
        <a href="/home">
          <!-- <img src="/theme/img/logo-inner.png" alt="logo" /> -->
          <img src="/theme/img/logo.png" alt="logo" />
        </a>
      </div>
      <div class="navbar-nav">
        <ul class="main-menu text-center">
            <li id="menu-item-42" class="menu-item current-menu-parent">
                <a href="{{ url('/') }}"><span>Home</span></a>
            </li>
            <li id="menu-item-50" class="menu-item">
                <a href="{{ url('/tarrif') }}"><span>Tarrif</span></a>
            </li>
            <li id="menu-item-50" class="menu-item">
                <a href="{{ url('/get-taxi') }}"><span>Get Taxi</span></a>
            </li>
            <li id="menu-item-55" class="menu-item">
                <a href="{{ url('/questions-answers') }}"><span>Q&A</span></a>
            </li>
            <li id="menu-item-59" class="menu-item">
                <a href="{{ url('/terms-conditions') }}"><span>T&C</span></a>
            </li>
            <li id="menu-item-707" class="menu-item">
                <a href="{{url('/contact-us')}}"><span>Contact Us</span></a>
            </li>
            @guest
            <li id="menu-item-707" class="menu-item">
                <a href="{{url('/login')}}"><span>Login</span></a>
            </li>
            @else
            <li>
                <a class="sub" href="#">Account ({{ Auth::user()->name }})</a>
                <ul class="submenu">
                    @if(Auth::user()->type == 'customer')
                    <li><a href="{{url('/booking-list')}}">My Bookings</a></li>
                    @elseif(Auth::user()->type == 'driver')                    
                    <li><a href="{{url('/driver/booking-list')}}">My Bookings</a></li>
                    @elseif(Auth::user()->type == 'admin')
                    <li><a href="{{url('/admin')}}">Admin Panel</a></li>       
                    @endif
                    <li><a href="{{ route('logout') }}">Logout</a></li>
                </ul>
            </li>
            @endguest
        </ul>
      </div>
    </div>
    <a class="cd-primary-nav-trigger" href="#0">
      <span class="cd-menu-text">Menu</span><span class="cd-menu-icon"></span>
    </a> 
    <!-- cd-primary-nav-trigger -->

  </header>