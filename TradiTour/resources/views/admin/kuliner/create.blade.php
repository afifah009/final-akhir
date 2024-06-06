<div class="container">
    <h1>Tambah Kuliner Baru</h1>
    @include('admin.kuliner.form', ['action' => route('admin.kuliner.store'), 'method' => 'POST', 'kuliner' => new App\Models\Kuliner])
</div>