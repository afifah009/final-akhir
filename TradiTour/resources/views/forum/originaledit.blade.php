<!--

@extends('tampilan.index')
@section('konten')
<style>
    .image-container {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .button-container {
        display: flex;
        justify-content: space-between;
        width: 100%;
        margin-top: 10px;
    }
    .back-button {
        display: flex;
        align-items: center;
        cursor: pointer;
    }
    .back-button svg {
        margin-right: 8px;
    }
</style>

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
                <p class="lead my-3">Edit forum</p>
            </div>
        </div>
    </div>
</div>
<div class="editpostingan">
    <div class="post-header">
        <img src="https://i.pinimg.com/736x/bb/b2/b0/bbb2b02e5c96312caf5e42b0661a92f6.jpg" alt="Foto Profil">
        <div>
            <div class="username">Username</div>
            <div class="publish-time">9 Juni 2024, 10:00 WIB</div>
        </div>
    </div>
    <div class="post-caption" id="postCaption">
        <span id="captionText">Ini adalah caption untuk gambar ini</span>
        <input type="text" id="captionInput" class="form-control d-none">
        <button onclick="editCaption()" id="editButton" class="btn btn-sm btn-primary">Edit</button>
    </div>
    <img id="postImage" src="https://cdn.idntimes.com/content-images/post/20181027/wacanaco-rumah-lamin-623eb95f50eacc00366d3d131d285fc7-10a73338a3f3ac12addb472374765868.jpg" alt="Deskripsi Gambar">
    <input type="file" id="imageInput" accept="image/*" class="form-control d-none">
    <div class="button-container">
        <div class="back-button" onclick="window.history.back()">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chevron-double-left" viewBox="0 0 16 16" style="color: black; margin-top:20px;">
              <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0"/>
              <path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0"/>
            </svg>
        </div>
        <button onclick="saveCaption()" id="saveButton" class="btn btn-sm btn-success d-none" style="margin-top:20px;">Simpan</button>
    </div>
    <hr>
</div>
<script>
    function editCaption() {
        // Sembunyikan teks caption dan tampilkan input field
        document.getElementById('captionText').classList.add('d-none');
        document.getElementById('captionInput').classList.remove('d-none');
        // Isi input field dengan teks yang sudah ada
        document.getElementById('captionInput').value = document.getElementById('captionText').innerText;
        // Sembunyikan tombol edit dan tampilkan tombol simpan
        document.getElementById('editButton').classList.add('d-none');
        document.getElementById('saveButton').classList.remove('d-none');
        // Tampilkan input untuk memilih file gambar
        document.getElementById('imageInput').classList.remove('d-none');
    }

    function saveCaption() {
        // Ambil nilai dari input field
        var newCaption = document.getElementById('captionInput').value;
        // Ubah teks caption dengan nilai yang baru
        document.getElementById('captionText').innerText = newCaption;
        // Sembunyikan input field dan tampilkan teks caption
        document.getElementById('captionInput').classList.add('d-none');
        document.getElementById('captionText').classList.remove('d-none');
        // Tampilkan tombol edit dan sembunyikan tombol simpan
        document.getElementById('editButton').classList.remove('d-none');
        document.getElementById('saveButton').classList.add('d-none');
        // Sembunyikan input untuk memilih file gambar
        document.getElementById('imageInput').classList.add('d-none');
    }

    // Function untuk menampilkan gambar yang dipilih oleh pengguna
    document.getElementById('imageInput').addEventListener('change', function() {
        var file = this.files[0];
        var reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('postImage').src = e.target.result;
        }
        reader.readAsDataURL(file);
    });
</script>
@endsection
-->