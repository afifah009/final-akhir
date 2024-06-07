@extends('admin.tampilan.layout')

@section('kontenadmin')
<div class="container">
    <h1>List Kerajinan Kreatif</h1>
    <a href="{{ route('admin.kerajinankreatif.create') }}" class="btn btn-primary mb-3">Tambah Kerajinan Kreatif Baru</a>
    @if ($kerajinanKreatifs->isEmpty())
        <p>Tabel Kerajinan Kreatif Kosong</p>
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
                @foreach ($kerajinanKreatifs as $key => $kerajinanKreatif)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $kerajinanKreatif->judul }}</td>
                        <td><img src="{{ asset('images/' . $kerajinanKreatif->gambar) }}" alt="{{ $kerajinanKreatif->judul }}" style="width: 100px;"></td>
                        <td>{{ Str::limit($kerajinanKreatif->artikel, 50) }}</td>
                        <td>
                            <a href="{{ route('admin.kerajinankreatif.edit', $kerajinanKreatif->id_kerajinan_kreatif) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.kerajinankreatif.destroy', $kerajinanKreatif->id_kerajinan_kreatif) }}" method="POST" style="display:inline-block;">
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
    <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection