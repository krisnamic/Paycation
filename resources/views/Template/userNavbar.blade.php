@if (Route::has('login'))
<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom border-primary">
    <a class="navbar-brand" href="{{route('welcome')}}"><img src="{{asset('img/paycation/paycation-2.svg')}}" alt="logo" type="image/svg+xml" width="130px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
            </li>
        </ul>
        @auth
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <!-- <img src="{{asset('img/userProfile/'.$user[0][0]->foto)}}" alt="user_image" width="40px" height="40px" style="border-radius:50%">
                @if(Session::has('user_id'))
                {{$user[0][0]->name}}
                @endif -->
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <form action="{{route('user.index')}}" method="GET">
                        <button type="submit" name="viewProfile">View My Profile</button>
                    </form>
                    <a href="{{ url('/logout') }}" class="dropdown-item">Logout</a>
                </div>
            </li>
        </ul>
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