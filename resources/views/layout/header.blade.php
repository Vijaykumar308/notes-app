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
        <a href="{{route('login')}}" class="btn btn-primary">Login</a>
        <a href="{{route('singup')}}" class="btn btn-danger">Register</a>
    </div>
</header>