@extends('layouts.app')

@section('title', 'Edit Mata Kuliah')

@section('content')
<h2>Edit Mata Kuliah</h2>

<form action="{{ route('mata_kuliahs.update', $mataKuliah) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="kode" class="form-label">Kode Mata Kuliah</label>
        <input type="text" name="kode" id="kode" class="form-control" value="{{ $mataKuliah->kode }}" required>
    </div>

    <div class="mb-3">
        <label for="nama" class="form-label">Nama Mata Kuliah</label>
        <input type="text" name="nama" id="nama" class="form-control" value="{{ $mataKuliah->nama }}" required>
    </div>

    <div class="mb-3">
        <label for="sks" class="form-label">SKS</label>
        <input type="number" name="sks" id="sks" class="form-control" value="{{ $mataKuliah->sks }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
