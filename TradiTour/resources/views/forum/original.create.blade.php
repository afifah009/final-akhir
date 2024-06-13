@extends('tampilan.index')

@section('konten')
    <div class="full-width-image">
        <img src="{{ asset('image/Travel Blogger LinkedIn Banner .png') }}" alt="Logo">
    </div>

    <div class="custom-tweet-form" style="margin-top: 90px">
        <!-- User Profile Section -->
        <div class="custom-user-profile" style="display: flex; align-items: center; margin-bottom: 20px;">
            <img src="{{ asset('image/WhatsApp Image 2024-06-05 at 15.39.24.jpeg') }}" alt="Profile Picture" style="width: 50px; height: 50px; border-radius: 50%; margin-right: 15px;">
            <span class="custom-username" style="font-size: 18px; color:black;">Username</span>
        </div>
        
        <input type="file" id="custom-tweet-image" accept="image/*" style="margin-bottom: 10px;" onchange="previewImage()">
        <div id="custom-image-preview"></div>
        <textarea id="custom-tweet-text" placeholder="What's happening?" class="custom-textarea" style="margin-bottom: 20px"></textarea>
        <div class="custom-tweet-actions">
            <span class="custom-char-count">140</span>
            <button id="custom-tweet-button" style="margin-top: 10px">Tweet</button>
        </div>
    </div>

@endsection