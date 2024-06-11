@extends('tampilan.index')
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #000000;
    }

    .tweet-form {
        background-color: #000000;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin: 20px auto;
        max-width: 500px;
    }

    textarea {
        width: 100%;
        height: 100px;
        border: 1px solid #ccc;
        border-radius: 4px;
        padding: 10px;
        font-size: 16px;
        margin-bottom: 10px;
    }

    .tweet-actions {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .char-count {
        color: #888;
    }

    #tweet-button {
        padding: 10px 20px;
        background-color: #1da1f2;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    #tweet-button:hover {
        background-color: #0d8bf0;
    }
</style>
@section('konten')
    <div class="full-width-image">
        <img src="{{ asset('image/Travel Blogger LinkedIn Banner .png') }}" alt="Logo">
    </div>


    <div class="tweet-form" style="margin-top: 90px">
        <input type="file" id="tweet-image" accept="image/*" style="margin-bottom: 10px;" onchange="previewImage()">
        <div id="image-preview"></div>
        <textarea id="tweet-text" placeholder="What's happening?" style="margin-bottom: 20px"></textarea>
        <div class="tweet-actions">
            <span class="char-count">140</span>
            <button id="tweet-button" style="margin-top: 10px">Tweet</button>
        </div>
    </div>


    <script>
        function previewImage() {
            var preview = document.getElementById('image-preview');
            var file = document.getElementById('tweet-image').files[0];
            var reader = new FileReader();

            reader.onloadend = function() {
                var img = new Image();
                img.src = reader.result;
                img.onload = function() {
                    preview.innerHTML = '';
                    preview.appendChild(img);
                }
            }

            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.innerHTML = 'No image selected';
            }
        }
    </script>
@endsection