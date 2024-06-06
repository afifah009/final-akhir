<div class="container">
    <h1>Edit Kerajinan Kreatif Bahari </h1>
    <h1>"{{ $kerajinanKreatif->judul }}"</h1>
    @include('admin.kerajinankreatif.form', ['action' => route('admin.kerajinankreatif.update', $kerajinanKreatif->id_kerajinan_kreatif), 'method' => 'PUT', 'kerajinankreatif' => $kerajinanKreatif])
</div>