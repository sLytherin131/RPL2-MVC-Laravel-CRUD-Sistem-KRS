<?php

namespace App\Http\Controllers;

use App\Models\KrsMahasiswa;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\MataKuliah;
use Illuminate\Http\Request;

class KrsMahasiswaController extends Controller
{
    public function index()
    {
        $krsList = KrsMahasiswa::all();
        $mahasiswas = Mahasiswa::all();
        $dosens = Dosen::all();
        $mataKuliahs = MataKuliah::all();
        return view('home', compact('krsList', 'mahasiswas', 'dosens', 'mataKuliahs'));
    }

    public function store(Request $request)
    {
        $mahasiswa = Mahasiswa::find($request->mahasiswa_id);
        $dosen = Dosen::find($request->dosen_id);
        $mataKuliah = MataKuliah::find($request->mata_kuliah_id);

        KrsMahasiswa::create([
            'mahasiswa_id' => $mahasiswa->id,
            'nama_mahasiswa' => $mahasiswa->nama,
            'npm' => $mahasiswa->nim,
            'jurusan' => $mahasiswa->jurusan,
            'dosen_id' => $dosen->id,
            'nama_dosen' => $dosen->nama,
            'nip' => $dosen->nip,
            'bidang' => $dosen->bidang,
            'mata_kuliah_id' => $mataKuliah->id,
            'kode_mata_kuliah' => $mataKuliah->kode,
            'mata_kuliah' => $mataKuliah->nama,
            'sks' => $mataKuliah->sks,
        ]);

        return redirect()->route('home')->with('success', 'Data KRS berhasil ditambahkan.');
    }

    public function edit(KrsMahasiswa $krsMahasiswa)
{
    $mahasiswas = Mahasiswa::all();
    $dosens = Dosen::all();
    $mataKuliahs = MataKuliah::all();

    return view('krs_mahasiswa.edit', compact('krsMahasiswa', 'mahasiswas', 'dosens', 'mataKuliahs'));
}


    public function update(Request $request, KrsMahasiswa $krsMahasiswa)
    {
        $mahasiswa = Mahasiswa::find($request->mahasiswa_id);
        $dosen = Dosen::find($request->dosen_id);
        $mataKuliah = MataKuliah::find($request->mata_kuliah_id);

        $krsMahasiswa->update([
            'mahasiswa_id' => $mahasiswa->id,
            'nama_mahasiswa' => $mahasiswa->nama,
            'npm' => $mahasiswa->nim,
            'jurusan' => $mahasiswa->jurusan,
            'dosen_id' => $dosen->id,
            'nama_dosen' => $dosen->nama,
            'nip' => $dosen->nip,
            'bidang' => $dosen->bidang,
            'mata_kuliah_id' => $mataKuliah->id,
            'kode_mata_kuliah' => $mataKuliah->kode,
            'mata_kuliah' => $mataKuliah->nama,
            'sks' => $mataKuliah->sks,
        ]);

        return redirect()->route('home')->with('success', 'Data KRS berhasil diupdate.');
    }

    public function destroy(KrsMahasiswa $krsMahasiswa)
    {
        $krsMahasiswa->delete();
        return redirect()->route('home')->with('success', 'Data KRS berhasil dihapus.');
    }
}
