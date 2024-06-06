<div class="container">
    <h1>Tambah Kerajinan Kreatif Baru</h1>
    @include('admin.kerajinankreatif.form', ['action' => route('admin.kerajinankreatif.store'), 'method' => 'POST', 'kerajinankreatif' => new App\Models\KerajinanKreatif])
</div>