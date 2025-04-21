@extends('layouts.app')

@section('title', 'Edit KRS Mahasiswa')

@section('content')
<h2>Edit KRS Mahasiswa</h2>

<form action="{{ route('krs-mahasiswa.update', $krsMahasiswa->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="mahasiswa_id" class="form-label">Mahasiswa</label>
        <select name="mahasiswa_id" id="mahasiswa_id" class="form-control" required>
            <option value="">-- Pilih Mahasiswa --</option>
            @foreach ($mahasiswas as $mahasiswa)
                <option value="{{ $mahasiswa->id }}" {{ $krsMahasiswa->mahasiswa_id == $mahasiswa->id ? 'selected' : '' }}>
                    {{ $mahasiswa->nama }} ({{ $mahasiswa->npm }})
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="dosen_id" class="form-label">Dosen</label>
        <select name="dosen_id" id="dosen_id" class="form-control" required>
            <option value="">-- Pilih Dosen --</option>
            @foreach ($dosens as $dosen)
                <option value="{{ $dosen->id }}" {{ $krsMahasiswa->dosen_id == $dosen->id ? 'selected' : '' }}>
                    {{ $dosen->nama }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="mata_kuliah_id" class="form-label">Mata Kuliah</label>
        <select name="mata_kuliah_id" id="mata_kuliah_id" class="form-control" required>
            <option value="">-- Pilih Mata Kuliah --</option>
            @foreach ($mataKuliahs as $mataKuliah)
                <option value="{{ $mataKuliah->id }}" {{ $krsMahasiswa->mata_kuliah_id == $mataKuliah->id ? 'selected' : '' }}>
                    {{ $mataKuliah->nama }} ({{ $mataKuliah->sks }} SKS)
                </option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
