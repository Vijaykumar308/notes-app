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
        <p class="post-message"> 
            {{$content}}
            <br>
            Because you are alive, everything is possible. - Thich Nhat Hanh
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium magni vel eligendi a possimus! Nesciunt quae, cum impedit, accusantium libero maxime odit doloremque, cupiditate architecto error possimus iusto laboriosam at deserunt nisi? Laboriosam sunt, culpa dolores exercitationem quibusdam earum, totam soluta eaque numquam, modi reprehenderit odio! Cumque possimus autem incidunt beatae fuga amet eveniet rerum itaque aspernatur perspiciatis, obcaecati ipsum blanditiis labore hic repellendus quo harum reiciendis, ullam dignissimos numquam repudiandae tenetur? Quaerat ad voluptatem voluptatum tempora cumque error eum iusto nulla numquam
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

            <button class="remove-btn-default-style">
                {{-- <i class="fa-solid fa-share-nodes reaction-counts"></i> --}}
                <i class="fa-regular fa-comment reaction-counts"></i>
                <span class="reaction-counts"> {{$comments}}k </span>
            </button>

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