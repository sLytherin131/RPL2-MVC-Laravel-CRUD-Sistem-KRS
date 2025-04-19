<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mataKuliahs = MataKuliah::all();
        return view('mata_kuliahs.index', compact('mataKuliahs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mata_kuliahs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'kode' => 'required|unique:mata_kuliahs',
        'nama' => 'required',
        'sks' => 'required|integer',
    ]);

    MataKuliah::create($request->all());

    return redirect()->route('mata_kuliahs.index')->with('success', 'Data berhasil disimpan.');
}


    /**
     * Display the specified resource.
     */
    public function show(MataKuliah $mataKuliah)
    {
        return view('mata_kuliahs.show', compact('mataKuliah'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MataKuliah $mataKuliah)
    {
        return view('mata_kuliahs.edit', compact('mataKuliah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MataKuliah $mataKuliah)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'sks' => 'required|integer',
        ]);

        $mataKuliah->update($request->all());
        return redirect()->route('mata_kuliahs.index')->with('success', 'Data mata kuliah berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MataKuliah $mataKuliah)
    {
        $mataKuliah->delete();
        return redirect()->route('mata_kuliahs.index')->with('success', 'Data mata kuliah berhasil dihapus.');
    }
}
