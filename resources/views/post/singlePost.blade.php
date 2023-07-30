@extends('layout.app')
@section('title','Feeds')
@php
    $usernames = ['mr.vijay.kumar308', 'ruhisingh2696', 'manish_kumar','lovejotsaini','aditi'];
@endphp
@section('main')
<section class="layout-section container-90">
    <div class="feed-menu item-1">
        <x-feed-menu />
    </div>

    <div class="item-2">
        <x-post 
        postId={{rand(354232,65667687233212)}}
        username={{$usernames[rand(0,4)]}}
        hoursAgo={{rand(1,23)}}
        content="Because you are alive, everything is possible. - Thich Nhat Hanh
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium magni vel eligendi a possimus! Nesciunt quae, cum impedit, accusantium libero maxime odit doloremque, cupiditate architecto error possimus iusto laboriosam at deserunt nisi? Laboriosam sunt, culpa dolores exercitationem quibusdam earum, totam soluta eaque numquam, modi reprehenderit odio! Cumque possimus autem incidunt beatae fuga amet eveniet rerum itaque aspernatur perspiciatis, obcaecati ipsum blanditiis labore hic repellendus quo harum reiciendis, ullam dignissimos numquam repudiandae tenetur? Quaerat ad voluptatem voluptatum tempora cumque error eum iusto nulla numquam"
        like={{rand(1,10)}}
        dislikes={{rand(1,10)}}
        comments={{rand(1,7)}}
        share={{rand(1,4)}}
        views={{rand(10,30)}}
        showMore={{false}}
        />   
        <div class="comment-box">
            <h2>Comments</h2>
            @for ($i = 1; $i < 2; $i++)
                <div class="comment-block">
                    <div>
                        <figure class="profile-pics">
                            <img src="{{asset('images/example/profile-pic.jpg')}}" alt="profile-pic">
                        </figure>
                    </div>

                    <div class="comment">
                        <a href="/user/profile/mr.vijay.kumar308">
                            <span class="username"> mr.vijay.kumar308 </span>
                        </a>
                       Nice Post !
                    </div> 
                </div>
                @endfor
            </div>
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