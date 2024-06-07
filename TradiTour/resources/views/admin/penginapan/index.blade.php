@extends('admin.tampilan.layout')

@section('kontenadmin')
<div class="container">
    <h1>List Tempat Penginapan</h1>
    <a href="{{ route('admin.penginapan.create') }}" class="btn btn-primary mb-3">Tambah Tempat Penginapan Baru</a>
    @if ($penginapans->isEmpty())
        <p>Tabel Tempat Penginapan Kosong</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Alamat</th>
                    <th>Gambar</th>
                    <th>Harga (IDR)</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penginapans as $key => $penginapan)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $penginapan->nama_penginapan }}</td>
                        <td>{{ Str::limit($penginapan->deskripsi_penginapan, 50) }}</td>
                        <td>{{ $penginapan->alamat_penginapan }}</td>
                        <td><img src="{{ asset('images/' . $penginapan->gambar_penginapan) }}" alt="{{ $penginapan->nama_penginapan }}" style="width: 100px;"></td>
                        <td>{{ $penginapan->harga_penginapan }}</td>
                        <td>
                            <a href="{{ route('admin.penginapan.edit', $penginapan->id_penginapan) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.penginapan.destroy', $penginapan->id_penginapan) }}" method="POST" style="display:inline-block;">
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
