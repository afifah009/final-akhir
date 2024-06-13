@extends('tampilan.index')

@section('konten')
    <div id="carouselExampleIndicators" class="carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://cdn.pixabay.com/photo/2017/07/28/11/50/spices-2548490_640.jpg" class="d-block w-100"
                    alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4 fst-italic">Selamat Datang</h1>
                    <p class="lead my-3">Kuliner Sulawesi Utara</p>
                </div>
            </div>
        </div>
    </div>

    <main class="album py-5 bg-light">
        <div class="container">
            <div style="margin-bottom: 50px;">
                <h1 style="color: rgb(3, 3, 5);">Jelajahi Kuliner Sulawesi Utara</h1>
            </div>
            <section class="row row-cols-1 row-cols-md-4 g-3">
                @foreach($kuliners as $kuliner)
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="{{ asset('images/'.$kuliner->gambar) }}" class="card-img-top fixed-size-img" alt="{{ $kuliner->judul }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $kuliner->judul }}</h5>
                                <p class="card-text">{{ Str::limit($kuliner->artikel, 100) }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ route('showkuliner', $kuliner->id_kuliner) }}" class="btn btn-sm btn-outline-secondary">Detail</a>
                                    </div>
                                    <small class="text-muted">Durasi Kunjungan</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </section>
        </div>
    </main>
@endsection