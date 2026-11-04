<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    // READ: Menampilkan semua data
    public function index()
    {
        $matakuliah = Matakuliah::all();
        return view('matakuliah.index', compact('matakuliah'));
    }

    // CREATE: Menampilkan form tambah
    public function create()
    {
        return view('matakuliah.create');
    }

    // CREATE: Menyimpan data ke database
    public function store(Request $request)
    {
        $request->validate([
            'kode_mk' => 'required|unique:matakuliahs',
            'nama_mk' => 'required',
            'sks' => 'required|integer',
        ]);

        Matakuliah::create($request->all());
        return redirect()->route('matakuliah.index')->with('success', 'Data berhasil ditambahkan');
    }

    // UPDATE: Menampilkan form edit
    public function edit(Matakuliah $matakuliah)
    {
        return view('matakuliah.edit', compact('matakuliah'));
    }

    // UPDATE: Menyimpan perubahan ke database
    public function update(Request $request, Matakuliah $matakuliah)
    {
        $request->validate([
            'kode_mk' => 'required|unique:matakuliahs,kode_mk,' . $matakuliah->id,
            'nama_mk' => 'required',
            'sks' => 'required|integer',
        ]);

        $matakuliah->update($request->all());
        return redirect()->route('matakuliah.index')->with('success', 'Data berhasil diubah');
    }

    // DELETE: Menghapus data
    public function destroy(Matakuliah $matakuliah)
    {
        $matakuliah->delete();
        return redirect()->route('matakuliah.index')->with('success', 'Data berhasil dihapus');
    }
}