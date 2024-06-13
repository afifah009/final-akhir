@foreach ($recentBahariArticles as $article)
    <div class="row mb-2">
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0">{{ $article->judul }}</h3>
                    <div class="mb-1 text-muted">{{ $article->created_at->format('d M') }}</div>
                    <p class="card-text mb-auto">{{ $article->artikel }}</p>
                    <a href="#" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="{{ asset('images/'.$article->gambar) }}" alt="Thumbnail" class="bd-placeholder-img" width="200" height="250">
                </div>
            </div>
        </div>
    </div>
@endforeach


