<div class="container">
    <h1>Edit Forum</h1>
    <form action="{{ route('forum.update', $forum->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="caption_forum">Caption</label>
            <textarea name="caption_forum" id="caption_forum" class="form-control" rows="5" required>{{ $forum->caption_forum }}</textarea>
        </div>
        <div class="form-group">
            <label for="kategori_forum">Category</label>
            <select name="kategori_forum" id="kategori_forum" class="form-control" required>
                <option value="bahari" {{ $forum->kategori_forum == 'bahari' ? 'selected' : '' }}>Bahari</option>
                <option value="non bahari" {{ $forum->kategori_forum == 'non bahari' ? 'selected' : '' }}>Non Bahari</option>
                <option value="seni budaya" {{ $forum->kategori_forum == 'seni budaya' ? 'selected' : '' }}>Seni Budaya</option>
                <option value="kuliner" {{ $forum->kategori_forum == 'kuliner' ? 'selected' : '' }}>Kuliner</option>
                <option value="kerajinan kreatif" {{ $forum->kategori_forum == 'kerajinan kreatif' ? 'selected' : '' }}>Kerajinan Kreatif</option>
            </select>
        </div>
        <div class="form-group">
            <label for="gambar_forum">Image</label>
            <input type="file" name="gambar_forum" id="gambar_forum" class="form-control">
            @if ($forum->gambar_forum)
                <img src="{{ asset($forum->gambar_forum) }}" alt="Forum Image">            
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>