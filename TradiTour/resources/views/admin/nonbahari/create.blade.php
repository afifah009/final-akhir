<div class="container">
    <h1>Tambah Wisata Bahari Baru</h1>
    @include('admin.nonbahari.form', ['action' => route('admin.nonbahari.store'), 'method' => 'POST', 'nonbahari' => new App\Models\Bahari])
</div>