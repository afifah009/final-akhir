<div class="container">
    <h1>List Wisata Non Bahari</h1>
    <a href="{{ route('admin.nonbahari.create') }}" class="btn btn-primary mb-3">Tambah Wisata Bahari Baru</a>
    @if ($nonBaharis->isEmpty())
        <p>Tabel Wisata Non Bahari Kosong</p>
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
                @foreach ($nonBaharis as $key => $nonBahari)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $nonBahari->judul }}</td>
                        <td><img src="{{ asset('images/' . $nonBahari->gambar) }}" alt="{{ $nonBahari->judul }}" style="width: 100px;"></td>
                        <td>{{ Str::limit($nonBahari->artikel, 50) }}</td>
                        <td>
                            <a href="{{ route('admin.nonbahari.edit', $nonBahari->id_non_bahari) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.nonbahari.destroy', $nonBahari->id_non_bahari) }}" method="POST" style="display:inline-block;">
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