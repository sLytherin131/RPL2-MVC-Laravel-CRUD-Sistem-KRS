@extends('layouts.app')

@section('title', 'Tambah Dosen')

@section('content')
<h2>Tambah Dosen</h2>

<form action="{{ route('dosens.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="nip" class="form-label">NIP</label>
        <input type="text" name="nip" id="nip" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="bidang" class="form-label">Bidang</label>
        <input type="text" name="bidang" id="bidang" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
