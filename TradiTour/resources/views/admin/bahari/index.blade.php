<div class="container">
    <h1>List Wisata Bahari</h1>
    <a href="{{ route('admin.bahari.create') }}" class="btn btn-primary mb-3">Tambah Wisata Bahari Baru</a>
    @if ($baharis->isEmpty())
        <p>Tabel Wisata Bahari Kosong</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Gambar</th>
                    <th>Isi Artikel</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($baharis as $key => $bahari)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $bahari->judul }}</td>
                        <td><img src="{{ asset('images/' . $bahari->gambar) }}" alt="{{ $bahari->judul }}" style="width: 100px;"></td>
                        <td>{{ Str::limit($bahari->artikel, 50) }}</td>
                        <td>
                            <a href="{{ route('admin.bahari.edit', $bahari->id_bahari) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.bahari.destroy', $bahari->id_bahari) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    <a href="{{ route('admin.dashboard') }}">Kembali</a>
</div>