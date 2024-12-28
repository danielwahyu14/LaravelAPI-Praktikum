<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    // Menampilkan semua data mahasiswa
    public function index()
    {
        return Dosen::all();
    }

    // Menyimpan data mahasiswa baru
    public function store(Request $request)
    {
        $dosen = Dosen::create($request->all());
        return response()->json($dosen, 201);
    }

    // Menampilkan data mahasiswa berdasarkan ID
    public function show($id)
    {
        return Dosen::find($id);
    }

    // Memperbarui data mahasiswa
    public function update(Request $request, $id)
    {
        $mahasiswa = Dosen::findOrFail($id);
        $mahasiswa->update($request->all());
        return response()->json($mahasiswa, 200);
    }

    // Menghapus data mahasiswa
    public function destroy($id)
    {
        Dosen::destroy($id);
        return response()->json(null, 204);
    }
}