<nav>
    <ul class="cd-primary-nav">
        <li id="menu-item-42" class="menu-item current-menu-parent">
            <a href="{{ url('/') }}/"><span>Home</span></a>
        </li>
        <li id="menu-item-50" class="menu-item">
            <a href="{{ url('/') }}/tarrif/"><span>Tarrif</span></a>
        </li>
        <li id="menu-item-50" class="menu-item">
            <a href="{{ url('/') }}/get-taxi/"><span>Get Taxi</span></a>
        </li>
        <li id="menu-item-55" class="menu-item">
            <a href="{{ url('/') }}/questions-answers/"><span>Q&A</span></a>
        </li>
        <li id="menu-item-59" class="menu-item">
            <a href="{{ url('/') }}/terms-conditions/"><span>T&C</span></a>
        </li>        
        <li id="menu-item-707" class="menu-item">
            <a href="{{url('/')}}/contact-us"><span>Contact Us</span></a>
        </li>
        @guest
            <li id="menu-item-707" class="menu-item">
                <a href="{{url('/login')}}"><span>Login</span></a>
            </li>
            @else
                @if(Auth::user()->type == 'customer')
                <li class="menu-item"><a href="{{url('/booking-list')}}">My Bookings</a></li>
                @elseif(Auth::user()->type == 'driver')                    
                <li class="menu-item"><a href="{{url('/driver/booking-list')}}">My Bookings</a></li>
                @elseif(Auth::user()->type == 'admin')
                <li class="menu-item"><a href="{{url('/admin')}}">Admin Panel</a></li>       
                @endif
                <li class="menu-item"><a href="{{ route('logout') }}">Logout</a></li>
            @endguest
    </ul>
  </nav>