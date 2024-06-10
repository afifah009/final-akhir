<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crediitour</title>
    {{-- CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<body>
    {{-- Header --}}
    @include('tampilan.header')

    {{-- Body --}}
    @yield('konten')

    {{-- Footer --}}
    @include('tampilan.footer')

    {{-- JavaScript --}}
    {{-- Bootstrap and Popper.js --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    {{-- Other Scripts --}}
    <script>
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.navbar');
            header.classList.toggle('scrolled', window.scrollY > 0);
        });

        const searchButton = document.getElementById('searchButton');
        const searchInput = document.querySelector('.search-input');

        searchButton.addEventListener('click', function() {
            searchInput.classList.toggle('show');
            if (searchInput.classList.contains('show')) {
                searchInput.focus();
            }
        });

        const showHiddenPass = (loginPass, loginEye) => {
            const input = document.getElementById(loginPass),
                iconEye = document.getElementById(loginEye);

            iconEye.addEventListener('click', () => {
                if (input.type === 'password') {
                    input.type = 'text';
                    iconEye.classList.add('ri-eye-line');
                    iconEye.classList.remove('ri-eye-off-line');
                } else {
                    input.type = 'password';
                    iconEye.classList.remove('ri-eye-line');
                    iconEye.classList.add('ri-eye-off-line');
                }
            });
        }

        showHiddenPass('login-pass', 'login-eye');
        
        // Galeri
        let next = document.querySelector('.next');
        let prev = document.querySelector('.prev');

        next.addEventListener('click', function(){
            let items = document.querySelectorAll('.item');
            document.querySelector('.slide').appendChild(items[0]);
        });

        prev.addEventListener('click', function(){
            let items = document.querySelectorAll('.item');
            document.querySelector('.slide').prepend(items[items.length - 1]);
        });

        // Question
        document.addEventListener('DOMContentLoaded', function () {
            var askQuestionBtn = document.querySelector('#askQuestionBtn');
            var askQuestionForm = document.querySelector('#askQuestionForm');

            askQuestionBtn.addEventListener('click', function () {
                askQuestionForm.style.display = 'block';
            });
        });

        // Wow.js
        new WOW().init();

        // Toggle Like
        function toggleLike(button) {
        button.classList.toggle("like");
        updateLikeCount();
    }

    function updateLikeCount() {
        const likeCount = document.querySelectorAll('.actions button.like').length;
        const commentCount = document.querySelectorAll('.actions button:not(.like)').length;
        document.querySelectorAll('.like-comment-count')[0].innerText = likeCount + (likeCount === 1 ? ' Like' : ' Likes');
        document.querySelectorAll('.like-comment-count')[1].innerText = commentCount + (commentCount === 1 ? ' Comment' : ' Comments');
    }

    function toggleLike(button) {
        // Tambahkan logika di sini untuk mengubah status tombol like
    }

    function toggleComments(button) {
        var commentsSection = button.parentElement.parentElement.querySelector('.post-comments');
        commentsSection.classList.toggle('show-comments');
    }
        // Zoomable Images
        document.addEventListener('DOMContentLoaded', function() {
            var images = document.querySelectorAll('.zoomable-img');
            images.forEach(function(image, index) {
                image.classList.add('zoomable-img-' + index);
            });
        });
    </script>
</body>
</html>
