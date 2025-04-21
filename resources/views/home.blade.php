@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
    <h2>Tambah KRS Mahasiswa</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('krs-mahasiswa.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="mahasiswa_id" class="form-label">Pilih Mahasiswa</label>
            <select name="mahasiswa_id" id="mahasiswa_id" class="form-control" required>
                <option value="">-- Pilih Mahasiswa --</option>
                @foreach ($mahasiswas as $mahasiswa)
                    <option value="{{ $mahasiswa->id }}">{{ $mahasiswa->nama }} - {{ $mahasiswa->nim }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="dosen_id" class="form-label">Pilih Dosen</label>
            <select name="dosen_id" id="dosen_id" class="form-control" required>
                <option value="">-- Pilih Dosen --</option>
                @foreach ($dosens as $dosen)
                    <option value="{{ $dosen->id }}">{{ $dosen->nama }} - {{ $dosen->nip }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="mata_kuliah_id" class="form-label">Pilih Mata Kuliah</label>
            <select name="mata_kuliah_id" id="mata_kuliah_id" class="form-control" required>
                <option value="">-- Pilih Mata Kuliah --</option>
                @foreach ($mataKuliahs as $mk)
                    <option value="{{ $mk->id }}">{{ $mk->nama }} - {{ $mk->kode }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Tambah KRS</button>
    </form>

    <hr>

    <h2>Data KRS Mahasiswa</h2>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Nama Mahasiswa</th>
                <th>Jurusan</th>
                <th>Nama Dosen</th>
                <th>Bidang</th>
                <th>Mata Kuliah</th>
                <th>SKS</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($krsList as $krs)
                <tr>
                    <td>{{ $krs->nama_mahasiswa }}</td>
                    <td>{{ $krs->jurusan }}</td>
                    <td>{{ $krs->nama_dosen }}</td>
                    <td>{{ $krs->bidang }}</td>
                    <td>{{ $krs->mata_kuliah }}</td>
                    <td>{{ $krs->sks }}</td>
                    <td>
                        <a href="{{ route('krs-mahasiswa.edit', $krs->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('krs-mahasiswa.destroy', $krs->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin hapus?')" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
