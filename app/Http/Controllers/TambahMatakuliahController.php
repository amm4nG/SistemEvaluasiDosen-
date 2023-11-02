<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;

class TambahMatakuliahController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'id_prodi' => ['required'],
            'kode_matakuliah' => ['required', 'unique:matakuliah,kode_matakuliah'],
            'nama_matakuliah' => ['required']
        ]);

        Matakuliah::create([
            'kode_matakuliah' => $request->kode_matakuliah,
            'id_prodi' => $request->id_prodi,
            'nama_matakuliah' => $request->nama_matakuliah
        ]);

        return back()->with([
            'success' => ['Matakuliah Berhasil Ditambahkan']
        ]);
    }
}
