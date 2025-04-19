@extends('layouts.app')

@section('title', 'Data Mata Kuliah')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h2>Data Mata Kuliah</h2>
    <a href="{{ route('mata_kuliahs.create') }}" class="btn btn-success">Tambah Mata Kuliah</a>
</div>

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Kode Mata Kuliah</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($mataKuliahs as $mataKuliah)
            <tr>
                <td>{{ $mataKuliah->kode }}</td>
                <td>{{ $mataKuliah->nama }}</td>
                <td>{{ $mataKuliah->sks }}</td>
                <td>
                    <a href="{{ route('mata_kuliahs.edit', $mataKuliah) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('mata_kuliahs.destroy', $mataKuliah) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin hapus?')" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
