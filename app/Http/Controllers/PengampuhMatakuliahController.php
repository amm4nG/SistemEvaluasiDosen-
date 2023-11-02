<?php

namespace App\Http\Controllers;

use App\Imports\PengampuhMatakuliahImport;
use App\Models\PengampuhMatakuliah;
use App\Models\Periode;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PengampuhMatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('admin.pengampuh');
        abort(404);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => ['required', 'mimes:xlsx,csv']
        ]);
        Excel::import(new PengampuhMatakuliahImport($request->id_prodi, $request->id_periode), $request->file('file'));
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $prodi = Prodi::find($id);
        $periode = Periode::where('status', 'on')->first();
        $pengampuh = PengampuhMatakuliah::join('dosen', 'dosen.nidn', '=', 'pengampuh_matakuliah.nidn')
        ->join('matakuliah', 'matakuliah.kode_matakuliah', '=', 'pengampuh_matakuliah.kode_matakuliah')
        ->where('pengampuh_matakuliah.id_prodi', $id)->get();
        return view('admin.informatika.data-pengampuh', compact(['id', 'periode', 'pengampuh', 'prodi']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
