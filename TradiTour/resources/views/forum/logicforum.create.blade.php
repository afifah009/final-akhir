    <div class="container">
        <h1>Create New Forum</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('forum.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="caption_forum">Caption</label>
                <textarea name="caption_forum" class="form-control" required>{{ old('caption_forum') }}</textarea>
            </div>
            <div class="form-group">
                <label for="kategori_forum">Category</label>
                <select name="kategori_forum" class="form-control" required>
                    <option value="bahari">Bahari</option>
                    <option value="non bahari">Non Bahari</option>
                    <option value="seni budaya">Seni Budaya</option>
                    <option value="kuliner">Kuliner</option>
                    <option value="kerajinan kreatif">Kerajinan Kreatif</option>
                </select>
            </div>
            <div class="form-group">
                <label for="gambar_forum">Image</label>
                <input type="file" name="gambar_forum" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>