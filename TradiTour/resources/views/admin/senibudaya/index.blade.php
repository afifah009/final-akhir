<div class="container">
    <h1>List Seni Budaya</h1>
    <a href="{{ route('admin.senibudaya.create') }}" class="btn btn-primary mb-3">Tambah Seni Budaya Baru</a>
    @if ($seniBudayas->isEmpty())
        <p>Tabel Seni Budaya Kosong</p>
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
                @foreach ($seniBudayas as $key => $seniBudaya)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $seniBudaya->judul }}</td>
                        <td><img src="{{ asset('images/' . $seniBudaya->gambar) }}" alt="{{ $seniBudaya->judul }}" style="width: 100px;"></td>
                        <td>{{ Str::limit($seniBudaya->artikel, 50) }}</td>
                        <td>
                            <a href="{{ route('admin.senibudaya.edit', $seniBudaya->id_seni_budaya) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.senibudaya.destroy', $seniBudaya->id_seni_budaya) }}" method="POST" style="display:inline-block;">
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