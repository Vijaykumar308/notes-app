<header>
    <div class="logo">
        <a href="{{route('/')}}" class="text-white">
            Notes App
        </a>
    </div>
    <nav>
        <ul>
            <li><a href="{{route('/')}}" class="text-white {{ request()->is('/') ? "active" :" "}}">Home</a></li>
            <li><a href="{{route('feeds')}}" class="text-white {{ request()->is('feeds') ? "active" :" "}}">Feeds</a></li>
            <li><a href="{{url('/notes')}}" class="text-white">Notes</a></li>
        </ul>
    </nav>  
    <div class="Registrations">
        @auth
        <div class="dropdown">
            <i class="fa-solid fa-circle-user" id="userAccount"></i>
            <ul class="user_profile dropdown-content" id="userProfile">
                <li>Hi, {{Auth::user()->username}}</li>
                <a href="{{url('users/profile')}}"><li>View Profile</li></a>
                <a href="{{ asset('users/changePassword')}}"><li>change password</li></a>
                <a href="{{route('logout')}}"><li>Logout</li></a>
            </ul>
        </div>
            
        @else
        <a href="{{route('login')}}" class="btn btn-primary">Login</a>
        <a href="{{route('singup')}}" class="btn btn-danger">Register</a>
    </div>
    @endauth
</header>