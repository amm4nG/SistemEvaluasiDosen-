<?php

namespace App\Http\Controllers;

use App\Imports\MatakuliahImport;
use App\Models\Matakuliah;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MatakuliahController extends Controller
{
    public function index()
    {
        // return view('admin.matakuliah');
        abort(404);
    }

    public function show($id){
        $prodi = Prodi::find($id);
        $matakuliah = Matakuliah::where('id_prodi', $id)->get();
        return view('admin.matakuliah', compact(['id', 'matakuliah', 'prodi']));
    }

    public function store(Request $request){
        $request->validate([
            'file' => ['required', 'mimes:xlsx,csv']
        ]);
        Excel::import(new MatakuliahImport($request->id_prodi), $request->file('file'));
        return back();
    }

    public function destroy($id){
        $matakuliah = Matakuliah::find($id);
        $matakuliah->delete();
        return back()->with([
            'delete' => 'Matakuliah Berhasil Dihapus'
        ]);
    }
}
