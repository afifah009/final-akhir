@extends('tampilan.index')

@section('konten')
    <div class="login">
        <img src="{{ asset('image/WhatsApp Image 2024-06-05 at 15.39.24.jpeg') }}" alt="edit profile image" class="login__img">

        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="login__form" style="padding-bottom:30px; padding-top:30px">
            @csrf
            @method('PUT')
            <h1 class="login__title">Edit Profile</h1>

            <div class="login__content">
                <div class="login__box">
                    <i class="ri-image-line login__icon"></i>

                    <div class="login__box-input">
                        <label class="login__label">Profile Image</label>
                        <input type="file" name="profile_image" class="login__input visually-hidden" id="profile-image-input">
                        <label for="profile-image-input" class="file-upload-label">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera" viewBox="0 0 16 16" style="margin-top:50px">
                                <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4z"/>
                                <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5m0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7M3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0"/>
                            </svg>
                        </label>
                        @if ($user->profile && $user->profile->profile_image)
                            <img src="{{ asset('images/' . $user->profile->profile_image) }}" alt="Profile Image" width="100" style="margin-left:100px">
                        @endif
                    </div>
                </div>

                <div class="login__box">
                    <i class="ri-user-3-line login__icon"></i>

                    <div class="login__box-input">
                        <input type="text" name="name" class="login__input" value="{{ $user->profile->name ?? '' }}" placeholder=" ">
                        <label class="login__label">Name</label>
                    </div>
                </div>

                <div class="login__box">
                    <i class="ri-user-3-line login__icon"></i>

                    <div class="login__box-input">
                        <input type="text" name="username" class="login__input" value="{{ $user->username }}" placeholder=" ">
                        <label class="login__label">Username</label>
                    </div>
                </div>

                <div class="login__box">
                    <i class="ri-file-list-line login__icon"></i>

                    <div class="login__box-input">
                        <input type="text" name="description" class="login__input" value="{{ $user->profile->description ?? '' }}" placeholder=" ">
                        <label class="login__label">Description</label>
                    </div>
                </div>
            </div>

            <button type="submit" class="login__button">Update Profile</button>
        </form>
    </div>
@endsection
