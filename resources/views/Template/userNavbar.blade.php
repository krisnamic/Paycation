@if (Route::has('login'))
<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light border-bottom border-primary">
    <a class="navbar-brand" href="{{route('welcome')}}"><img src="{{asset('img/paycation/paycation-2.svg')}}" alt="logo" type="image/svg+xml" width="130px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active mt-1 ml-2 mr-2">
                <a class="nav-link" href="{{route('welcome')}}" style="background: none!important;
  border: none;
  padding: 0!important;
  /*optional*/
  font-family: arial, sans-serif;
  color: #069;
  cursor: pointer;">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mt-1 ml-2">
                <form action="{{route('aboutUs')}}" method="get">
                    <button class="nav-link" href="" style="background: none!important;
  border: none;
  padding: 0!important;
  /*optional*/
  font-family: arial, sans-serif;
  color: #069;
  cursor: pointer;">About Us</button>
                </form>
            </li>
        </ul>
        @auth
        @if(Session::has('admin_is_loggedin'))
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Admin
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a href="{{ url('/logout') }}" class="dropdown-item" style="color: #069; font-family: arial, sans-serif;">Logout</a>
                </div>
            </li>
        </ul>
        @else
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active mt-3 ml-2 mr-2">
                <a href="{{route('viewBookingDetail')}}"><i class="fas fa-address-book" style="font-size: 20px;"></i> Booking History</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if(Session::has('user_id'))
                    <img src="{{asset('img/userProfile/'.$user[0][0]->foto)}}" alt="user_image" width="40px" height="40px" style="border-radius:50%;">
                    {{$user[0][0]->name}}
                    @endif
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <form action="{{route('user.index')}}" method="GET">
                        <button class="ml-3" type="submit" name="viewProfile" style="background: none!important;
  border: none;
  padding: 0!important;
  /*optional*/
  font-family: arial, sans-serif;
  color: #069;
  cursor: pointer;">View My Profile</button>
                    </form>
                    <a href="{{ url('/logout') }}" class="dropdown-item" style="color: #069; font-family: arial, sans-serif;">Logout</a>
                </div>
            </li>
        </ul>
        @endif
        @else
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="{{ route('login') }}" class="nav-link">Log in</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
                <a href="{{ route('register') }}" class="nav-link">Register</a>
            </li>
            @endif
        </ul>
        @endauth
    </div>
</nav>
@endif