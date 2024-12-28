<?php
namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // Menampilkan semua data mahasiswa
    public function index()
    {
        return Mahasiswa::all();
    }

    // Menyimpan data mahasiswa baru
    public function store(Request $request)
    {
        $mahasiswa = Mahasiswa::create($request->all());
        return response()->json($mahasiswa, 201);
    }

    // Menampilkan data mahasiswa berdasarkan ID
    public function show($id)
    {
        return Mahasiswa::find($id);
    }

    // Memperbarui data mahasiswa
    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update($request->all());
        return response()->json($mahasiswa, 200);
    }

    // Menghapus data mahasiswa
    public function destroy($id)
    {
        Mahasiswa::destroy($id);
        return response()->json(null, 204);
    }
}