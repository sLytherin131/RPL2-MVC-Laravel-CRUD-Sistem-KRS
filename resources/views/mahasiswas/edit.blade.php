@extends('layouts.app')

@section('title', 'Edit Mahasiswa')

@section('content')
<h2>Edit Mahasiswa</h2>

<form action="{{ route('mahasiswas.update', $mahasiswa) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control" value="{{ $mahasiswa->nama }}" required>
    </div>

    <div class="mb-3">
        <label for="nim" class="form-label">NIM</label>
        <input type="text" name="nim" id="nim" class="form-control" value="{{ $mahasiswa->nim }}" required>
    </div>

    <div class="mb-3">
        <label for="jurusan" class="form-label">Jurusan</label>
        <input type="text" name="jurusan" id="jurusan" class="form-control" value="{{ $mahasiswa->jurusan }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
