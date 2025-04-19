@extends('layouts.app')

@section('title', 'Tambah Mata Kuliah')

@section('content')
<h2>Tambah Mata Kuliah</h2>

<form action="{{ route('mata_kuliahs.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="kode" class="form-label">Kode</label>
        <input type="text" name="kode" id="kode" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="nama" class="form-label">Nama Mata Kuliah</label>
        <input type="text" name="nama" id="nama" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="sks" class="form-label">SKS</label>
        <input type="number" name="sks" id="sks" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
