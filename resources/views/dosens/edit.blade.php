@extends('layouts.app')

@section('title', 'Edit Dosen')

@section('content')
<h2>Edit Dosen</h2>

<form action="{{ route('dosens.update', $dosen) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control" value="{{ $dosen->nama }}" required>
    </div>

    <div class="mb-3">
        <label for="nip" class="form-label">NIP</label>
        <input type="text" name="nip" id="nip" class="form-control" value="{{ $dosen->nip }}" required>
    </div>

    <div class="mb-3">
        <label for="bidang" class="form-label">Bidang</label>
        <input type="text" name="bidang" id="bidang" class="form-control" value="{{ $dosen->bidang }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
