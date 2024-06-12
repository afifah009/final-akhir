@extends('tampilan.index')
@section('konten')
    <div id="carouselExampleIndicators" class="carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://cdn.pixabay.com/photo/2024/01/08/15/54/defile-8495836_1280.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4 fst-italic">Forum</h1>
                    <p class="lead my-3">Silahkan Berkomentar untuk setiap destinasi</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <!-- Main content -->
            <div class="col-lg-9 mb-3">
                <div class="row text-left mb-5">
                    <div class="col-lg-6 mb-3 mb-sm-0">
                        <div class="dropdown bootstrap-select form-control form-control-lg bg-gray-25 bg-op-9 text-sm w-lg-50" style="width: 100%;">
                            <select class="form-control form-control-lg bg-white bg-op-9 text-sm w-lg-50" data-toggle="select" tabindex="-98">
                                <option>Kategori</option>
                                <option>Bahari</option>
                                <option>Non Bahari</option>
                                <option>Seni Budaya</option>
                                <option>Kuliner</option>
                                <option>Kerajinan Kreatif</option>
                                <option>My Posts</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 text-lg-right">
                        <div class="dropdown bootstrap-select form-control form-control-lg bg-white bg-op-9 ml-auto text-sm w-lg-50" style="width: 100%;">
                            <select class="form-control form-control-lg bg-white bg-op-9 ml-auto text-sm w-lg-50" data-toggle="select" tabindex="-98">
                                <option>Urutkan Berdasarkan</option>
                                <option>Date</option>
                                <option>Likes</option>
                                <option>Comments</option>
                            </select>
                        </div>
                    </div>
                </div>

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
                                        <a href="{{route('forum.edit')}}">Edit</a>
                                        </div>
                                    </div>
                                @endif
                            @endauth
                        </div>

                        <div class="post-caption">Category : {{ $forum->kategori_forum }}</div>
                        <div class="post-caption">{{ $forum->caption_forum }}</div>                        
                        <img src="{{ asset('images/' . $forum->gambar_forum) }}" alt="Forum Image">    
                        
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

<!---->
                        
                <div class="post">
                    <div class="post-header">
                        <img src="https://i.pinimg.com/736x/bb/b2/b0/bbb2b02e5c96312caf5e42b0661a92f6.jpg" alt="Foto Profil">
                        <div>
                            <div class="username">Username</div>
                            <div class="publish-time">9 Juni 2024, 10:00 WIB</div>
                        </div>
                        <div class="custom-dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-sliders" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1z"/>
                            </svg>
                            <div class="custom-dropdown-content">
                              <a href="{{route('forum.edit')}}">Edit</a>
                            </div>
                          </div>
                    </div>

                    <div class="post-caption">Ini adalah caption untuk gambar ini</div>
                    <img src="https://cdn.idntimes.com/content-images/post/20181027/wacanaco-rumah-lamin-623eb95f50eacc00366d3d131d285fc7-10a73338a3f3ac12addb472374765868.jpg" alt="Deskripsi Gambar">
                    
                    
                    <div class="actions">
                        <button onclick="toggleLike(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
                            </svg>
                        </button>
                        <span class="like-comment-count">10 Likes</span>
                        <button onclick="toggleComments(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105"/>
                            </svg>
                        </button>
                        <span class="like-comment-count">5 Comments</span>
                    </div>
                    {{-- <div class="custom-dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-sliders" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1z"/>
                        </svg>
                        <div class="custom-dropdown-content">
                          <a href="#">Edit</a>
                        </div>
                      </div> --}}
                    <hr>
                    <div>
                        <h4 style="color: black;">Komentar</h4>
                        <!-- Pesan jika tidak ada komentar -->
                        <p class="no-comments"  style="color: black">Silahkan berkomentar pada postingan ini.</p>
                        <!-- Contoh komentar -->
                        <div class="comment">
                            <img class="comment-avatar" src="https://i.pinimg.com/736x/bb/b2/b0/bbb2b02e5c96312caf5e42b0661a92f6.jpg" alt="Profile Picture">
                            <div class="comment-content">
                                <div class="comment-header">
                                    <div class="comment-author" style="color: black">ahmad</div>
                                </div>
                                </div>
                            </div>
                                <div class="comment-text" style="color: black">eaaaaa</div>
                                <div class="comment">
                                    <img class="comment-avatar" src="https://i.pinimg.com/736x/bb/b2/b0/bbb2b02e5c96312caf5e42b0661a92f6.jpg" alt="Profile Picture">
                                    <div class="comment-content">
                                        <div class="comment-header">
                                            <div class="comment-author" style="color: black">Safitri Lestalulu Simanjuntak HEAAAA</div>
                                        </div>
                                        </div>
                                    </div>
                                        <div class="comment-text" style="color: black">EMANG EAAAAAA</div>
                        <hr>
                        <div class="form-group" style="flex: 1;">
                            <label for="content" style="color: rgb(0, 0, 0); border-radius:8px; padding-bottom:15px">Your Comment:</label>
                            <div style="position: relative;">
                                <textarea class="form-control" id="content" name="content" rows="1" style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0); padding-right: 40px;" placeholder="Tambahkan Komentar"></textarea>
                                <button type="submit" class="btn btn-primary" style="background-color: rgb(0, 0, 0); border-color:rgb(255, 254, 254); position: absolute; right: 0; top: 0; bottom: 0; margin: auto;">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="post">
                    <div class="post-header">
                        <img src="https://i.pinimg.com/736x/bb/b2/b0/bbb2b02e5c96312caf5e42b0661a92f6.jpg" alt="Foto Profil">
                        <div>
                            <div class="username">Username</div>
                            <div class="publish-time">9 Juni 2024, 10:00 WIB</div>
                        </div>
                        <div class="custom-dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-sliders" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1z"/>
                            </svg>
                            <div class="custom-dropdown-content">
                              <a href="{{route('twit')}}">Edit</a>
                            </div>
                          </div>
                    </div>
                    <div class="post-caption">Ini adalah caption untuk gambar ini</div>
                    <img src="https://cdn.idntimes.com/content-images/post/20181027/wacanaco-rumah-lamin-623eb95f50eacc00366d3d131d285fc7-10a73338a3f3ac12addb472374765868.jpg" alt="Deskripsi Gambar">
                    <div class="actions">
                        <button onclick="toggleLike(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
                            </svg>
                        </button>
                        <span class="like-comment-count">10 Likes</span>
                        <button onclick="toggleComments(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105"/>
                            </svg>
                        </button>
                        <span class="like-comment-count">5 Comments</span>
                    </div>
                    <hr>
                    <div>
                        <h4 style="color: black;">Komentar</h4>
                        <!-- Pesan jika tidak ada komentar -->
                        <p class="no-comments"  style="color: black">Silahkan berkomentar pada postingan ini.</p>
                        <!-- Contoh komentar -->
                        <div class="comment">
                            <img class="comment-avatar" src="https://i.pinimg.com/736x/bb/b2/b0/bbb2b02e5c96312caf5e42b0661a92f6.jpg" alt="Profile Picture">
                            <div class="comment-content">
                                <div class="comment-header">
                                    <div class="comment-author" style="color: black">ahmad</div>
                                </div>
                                </div>
                            </div>
                                <div class="comment-text" style="color: black">eaaaaa</div>
                                <div class="comment">
                                    <img class="comment-avatar" src="https://i.pinimg.com/736x/bb/b2/b0/bbb2b02e5c96312caf5e42b0661a92f6.jpg" alt="Profile Picture">
                                    <div class="comment-content">
                                        <div class="comment-header">
                                            <div class="comment-author" style="color: black">Safitri Lestalulu Simanjuntak HEAAAA</div>
                                        </div>
                                        </div>
                                    </div>
                                        <div class="comment-text" style="color: black">EMANG EAAAAAA</div>
                                        <div id="commentsModal" class="modal">
                                            <div class="modal-content" style="color: black; border-radius: 10px;">
                                                <span class="close" onclick="closeCommentsModal()">&times;</span>
                                                <h2 style="color: black;">Komentar</h2>
                                                <!-- List of comments will be shown here -->
                                                <div id="commentList">
                                                    <div class="comment">
                                                        <img class="comment-avatar"
                                                            src="https://i.pinimg.com/736x/bb/b2/b0/bbb2b02e5c96312caf5e42b0661a92f6.jpg"
                                                            alt="Profile Picture">
                                                        <div class="comment-content">
                                                            <div class="comment-header">
                                                                <div class="comment-author" style="color: black">ahmad</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-text" style="color: black">eaaaaa</div>
                                                    <!-- Repeat the structure for other comments -->
                                                    <!-- Example of another comment -->
                                                    <div class="comment">
                                                        <img class="comment-avatar"
                                                            src="https://i.pinimg.com/736x/bb/b2/b0/bbb2b02e5c96312caf5e42b0661a92f6.jpg"
                                                            alt="Profile Picture">
                                                        <div class="comment-content">
                                                            <div class="comment-header">
                                                                <div class="comment-author" style="color: black">zaky</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-text" style="color: black">eaaaaa</div>
                                                </div>
                                                <!-- Form to add new comment -->
                                                <textarea id="newComment" rows="4" cols="50" style="color: black;"></textarea>
                                                <button onclick="addComment()"
                                                    style="color: white; background-color: #007bff; border: none; border-radius: 5px; padding: 8px 16px; cursor: pointer;">Tambahkan
                                                    Komentar</button>
                                            </div>
                                        </div>
                        <hr>
                        <div class="form-group" style="flex: 1;">
                            <label for="content" style="color: rgb(0, 0, 0); border-radius:8px; padding-bottom:15px">Your Comment:</label>
                            <div style="position: relative;">
                                <textarea class="form-control" id="content" name="content" rows="1" style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0); padding-right: 40px;" placeholder="Tambahkan Komentar"></textarea>
                                <button type="submit" class="btn btn-primary" style="background-color: rgb(0, 0, 0); border-color:rgb(255, 254, 254); position: absolute; right: 0; top: 0; bottom: 0; margin: auto;">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
            <!-- Sidebar content -->
            <div class="col-lg-3 mb-4 mb-lg-0 px-lg-0 mt-lg-0">
                <div class="sticky" style="top: 85px;">
                    <div class="sticky-inner">
                        <a class="btn btn-lg btn-block btn-success rounded-0 py-4 mb-3 bg-op-6 roboto-bold" href="{{route('forum.create')}}">Buat Postingan Baru</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection