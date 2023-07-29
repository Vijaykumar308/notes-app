@extends('layout.app')

@section('title','feeds')

@section('main')
<section class="layout-section container-90">
    <div class="feed-menu item-1">
        <h3 class="heading-menu">Menu</h3>
        <ul>
            <li class="feed-menu-active">
                <i class="fa-solid fa-house"></i>         
                <a href="#">Home</a>
            </li>

            <li>
                <i class="fa-solid fa-image"></i>
                <a href="#">My Gallary</a>
            </li>

            <li>
                <i class="fa-solid fa-user-group"></i>
                <a href="#">Friends</a>
            </li>

            <li>
                <i class="fa-solid fa-message"></i>
                <a href="#">Messages</a>
            </li>

            <li>
                <i class="fa-solid fa-calendar-days"></i>
                <a href="#">Upcoming Events</a>
            </li>
        </ul>
    </div>
    <div class="item-2">2</div>

    <div class="item-3">
        <div class="messages-menu item-1">
            <h3 class="heading-menu">
                <i class="fa-solid fa-message"></i>
               <span>Messages</span>
            </h3>       

            <ul class="messages-ul">
                @for ($i = 1; $i < 12; $i++)
                    <li>        
                        <div class="messages user-block">
                            <figure class="profile-pic">
                                <img src="{{asset('images/example/profile-pic.jpg')}}" alt="profile-pic">
                            </figure>

                            <div class="profile-block">
                                <a href="users/messages/mr.vijay.kumar">
                                    <h1 class="messages-block username">
                                       mr.vijay.kumar
                                    </h1>
                                    <p class="">Last Active 1 mins ago</p>
                                </a>
                            </div>
                        </div>
                    </li>
                @endfor
            </ul>
        </div>
    </div>

    <div class="item-4">
        <div class="event-menu item-1">
            <h3 class="heading-menu">
              <i class="fa-solid fa-calendar-days"></i>
               <span>Events - {{ date('F')}}</span>
            </h3>       
            <ul class="events-ul">
                @for ($i = 1; $i < 5; $i++)
                    <li>        
                        <div class="user-block">
                            <figure class="profile-pic">
                                <img src="{{asset('images/example/profile-pic.jpg')}}" alt="profile-pic">
                            </figure>

                            <div class="profile-block">
                                <h1 class="username">mr.vijay.kumar</h1>
                                <p class="wish-title">Happy Birthday</p>
                            </div>
                        </div>
                    </li>
                @endfor
            </ul>
        </div>
    </div>
</section>
@endsection