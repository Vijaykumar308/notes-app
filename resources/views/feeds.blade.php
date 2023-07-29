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
    <div class="item-2">
        @for ($i = 1; $i < 50; $i++)
            <div class="posts-container">
                <div class="posts-topbar">
                    <div class="profile">
                        <figure class="profile-pic">
                            <img src="{{asset('images/example/profile-pic.jpg')}}" alt="profile-pic">
                        </figure>

                        <div class="profile-block">
                            <a href="users/messages/mr.vijay.kumar">
                                <h1 class="messages-block username">                           
                                    mr.vijay.kumar
                                </h1>
                                <p class="">6 hours ago</p>
                            </a>
                        </div>
                    </div>
                    <div class="topbar-right-side">
                        <button class="save-btn-icon reaction-counts remove-btn-default-style">
                            <i class="fa-regular fa-bookmark"></i>
                            {{-- <i class="fa-solid fa-bookmark"></i> --}}
                        </button>
                    </div>
                </div>

                <div class="posts-content">
                    <h3 class="post-heading"> My first Blog</h3>
                    <p class="post-message"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et exercitationem quas aliquid illo rerum, in consectetur ratione quaerat quo placeat cumque hic fugit unde temporibus praesentium porro quae aliquam aspernatur? Pariatur, libero quis. Ut iste itaque rem quis ab laudantium rerum deserunt at animi nostrum numquam veritatis mollitia incidunt, a facilis ad voluptates debitis aspernatur optio autem soluta est maxime modi repellendus? Suscipit eos officiis quos ratione, quisquam commodi esse mollitia veritatis harum atque fugit iste non corrupti qui, voluptatum reprehenderit nemo. Veritatis vero, earum debitis voluptas enim illo nam animi est quia quaerat cumque consequuntur ullam natus dignis. </p>
                </div>

                <div class="posts-footer">
                    <div class="posts-footer-items">
                        <button class="remove-btn-default-style">
                            <i class="fa-regular fa-heart reaction-counts"></i>
                            {{-- <i class="fa-solid fa-heart"></i> --}}
                            <span class="reaction-counts">10k</span>
                        </button>
                        <button class="remove-btn-default-style">
                            <i class="fa-regular fa-thumbs-down reaction-counts"></i>
                            {{-- <i class="fa-solid fa-heart-crack"></i> --}}
                            <span class="reaction-counts">4k</span>
                        </button>
                        <button class="remove-btn-default-style">
                            <i class="fa-solid fa-share-nodes reaction-counts"></i>
                            <span class="reaction-counts"> 3k </span>
                        </button>
                    </div>
                    <button class="remove-btn-default-style">
                        <i class="fa-solid fa-eye"></i>
                        <span class="reaction-counts"> 20k</span>
                    </button>
                </div>
            </div>  
        @endfor
    </div>

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