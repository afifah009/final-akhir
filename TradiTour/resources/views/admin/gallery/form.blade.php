<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if ($method == 'PUT')
        @method('PUT')
    @endif

    <div class="form-group">
        <label for="keterangan">Keterangan gambar</label>
        <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{ old('keterangan', $gallery->keterangan ?? '') }}" required>
    </div>

    <div class="form-group">
        <label for="image">Gambar</label>
        <input type="file" class="form-control" id="image" name="image" {{ $method == 'POST' ? 'required' : '' }}>
        @if ($method == 'PUT' && isset($gallery->image))
            <div>
                <img src="{{ asset('images/' . $gallery->image) }}" alt="{{ $gallery->keterangan }}" style="width: 100px;">
            </div>
        @endif
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Upload Gambar</button>
        <a href="{{ route('admin.gallery.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</form>
