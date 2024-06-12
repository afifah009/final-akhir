<a href="{{ route('home') }}">Back</a>
<a href="{{ route('forum.create') }}">Create Forum</a>
@foreach($forums as $forum)
    <div class="post">
        <div class="post-header">
            <img src="{{ asset('images/' . $forum->user->profile->profile_image) }}" alt="Foto Profil {{$forum->user->username}}">
            <div>
                <div class="username">{{ $forum->user->username }}</div>
                <div class="publish-time"> {{ $forum->created_at }} || 9 Juni 2024, 10:00 WIB</div>
            </div>
            
            @auth
                @if($forum->user_id === auth()->id())
                    <div class="custom-dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-sliders" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1z"/>
                        </svg>
                        <div class="custom-dropdown-content">
                            <a href="{{ route('forum.edit', $forum->id) }}">Edit</a>
                        </div>
                    </div>
                @endif
            @endauth
        </div>

        <div class="post-caption">Category : {{ $forum->kategori_forum }}</div>
        <div class="post-caption">{{ $forum->caption_forum }}</div>                        
        <img src="{{ asset($forum->gambar_forum) }}" alt="Forum Image">   
        
        <div class="actions">
            <form action="{{ route('forum.like', $forum) }}" method="post" id="likeForm{{ $forum->id }}" style="display: inline;">
                @csrf
                <button type="submit" style="display: none;"></button>
            </form>
            <button onclick="document.getElementById('likeForm{{ $forum->id }}').submit()">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
                </svg>
            </button>
            <span class="like-comment-count">{{ $forum->likes->count() }} Likes</span>
            <button onclick="toggleComments(this)">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                    <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105"/>
                </svg>
            </button>
            <span class="like-comment-count">5 Comments</span>
        </div>
    </div>
@endforeach