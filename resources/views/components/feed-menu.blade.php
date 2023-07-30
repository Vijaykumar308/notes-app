<h3 class="heading-menu">Menu</h3>
<ul>

    <li class="{{request()->is('feeds*') ? "feed-menu-active" : "" }}">
        <i class="fa-solid fa-house"></i>         
        <a href="{{route('feeds')}}">Home</a>
    </li>

    <li class="{{request()->is('') ? "feed-menu-active" : "" }}">
        <i class="fa-solid fa-image"></i>
        <a href="#">My Posts</a>
    </li>

    <li class="{{request()->is('') ? "feed-menu-active" : "" }}">
        <i class="fa-solid fa-user-group"></i>
        <a href="#">Friends</a>
    </li>

    <li class="{{request()->is('') ? "feed-menu-active" : "" }}">
        <i class="fa-solid fa-message"></i>
        <a href="#">Messages</a>
    </li>

    <li class="{{request()->is('') ? "feed-menu-active" : "" }}">
        <i class="fa-solid fa-calendar-days"></i>
        <a href="#">Upcoming Events</a>
    </li>
</ul>
