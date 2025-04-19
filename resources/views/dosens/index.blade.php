@extends('layouts.app')

@section('title', 'Data Dosen')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h2>Data Dosen</h2>
    <a href="{{ route('dosens.create') }}" class="btn btn-success">Tambah Dosen</a>
</div>

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nama</th>
            <th>NIP</th>
            <th>Bidang</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dosens as $dosen)
            <tr>
                <td>{{ $dosen->nama }}</td>
                <td>{{ $dosen->nip }}</td>
                <td>{{ $dosen->bidang }}</td>
                <td>
                    <a href="{{ route('dosens.edit', $dosen) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('dosens.destroy', $dosen) }}" method="POST" style="display:inline;">
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
