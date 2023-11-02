<?php

namespace App\Http\Controllers;

use App\Imports\DosenImport;
use App\Models\Dosen;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DosenController extends Controller
{
    public function index()
    {
        // return view('admin.dosen');
    }

    public function show($id){
        $prodi = Prodi::find($id);
        $dosen = Dosen::where('id_prodi', $id)->get();
        return view('admin.dosen', compact(['id', 'dosen', 'prodi']));
    }

    public function store(Request $request){
        $request->validate([
            'file' => ['required', 'mimes:xlsx,csv']
        ]);
        Excel::import(new DosenImport($request->id_prodi), $request->file('file'));
        return back();
    }

    public function destroy($id){
        $dosen = Dosen::find($id);
        $dosen->delete();
        return back()->with([
            'delete' => 'Berhasil Dihapus'
        ]);
    }
}
