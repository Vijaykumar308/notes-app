<div class="posts-container">
    <div class="posts-topbar">
        <div class="profile">
            <figure class="profile-pic">
                <img src="{{asset('images/example/profile-pic.jpg')}}" alt="profile-pic">
            </figure>

            <div class="profile-block">
                <a href="/user/profile/{{$username}}">
                    <h1 class="messages-block username">                           
                        {{-- mr.vijay.kumar308 --}}
                        {{ $username}}
                    </h1>
                </a>
                <p class="">{{ $hoursAgo}} hours ago</p>
            </div>
        </div>
        <div class="topbar-right-side">
            <button class="follow-button"> + Follow </button>
            {{-- <button class="save-btn-icon reaction-counts remove-btn-default-style">
                <i class="fa-regular fa-bookmark"></i>
                <i class="fa-solid fa-bookmark"></i>
            </button> --}}
        </div>
    </div>

    <div class="posts-content">
        {{-- <h3 class="post-heading"> My first Blog</h3> --}}
        <p class="post-message {{  $showMore ? "text-ellipse" : "" }}"> 
            {{$content}}
        </p>

        @if ($showMore)
         <a href="{{route('singlePost')}}/{{$username}}/{{$postId}}" class="show-more-link"> show more...</a>
        @endif
    </div>

    <div class="posts-footer">
        <div class="posts-footer-items">
            <button class="remove-btn-default-style">
                <i class="fa-regular fa-heart reaction-counts"></i>
                {{-- <i class="fa-solid fa-heart"></i> --}}
                <span class="reaction-counts">{{$like}}k </span>
            </button>

            <button class="remove-btn-default-style">
                <i class="fa-regular fa-thumbs-down reaction-counts"></i>
                {{-- <i class="fa-solid fa-heart-crack"></i> --}}
                <span class="reaction-counts">{{$dislikes}}k</span>
            </button>
            <a href="{{route('singlePost')}}/{{$username}}/{{$postId}}">
                <button class="remove-btn-default-style">
                    <i class="fa-regular fa-comment reaction-counts"></i>
                    <span class="reaction-counts"> {{$comments}}k </span>
                </button>
            </a>

            <button class="remove-btn-default-style">
                <i class="fa-solid fa-share-nodes reaction-counts"></i>
                <span class="reaction-counts">{{$share}}k </span>
            </button>
        </div>

        <button class="remove-btn-default-style">
            <i class="fa-solid fa-eye"></i>
            <span class="reaction-counts"> {{$views}}k </span>
        </button>
    </div>
</div>