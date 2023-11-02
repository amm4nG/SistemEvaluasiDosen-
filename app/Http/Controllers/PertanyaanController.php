<?php

namespace App\Http\Controllers;

use App\Models\PertanyaanEvaluasi;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pertanyaan = PertanyaanEvaluasi::all();
        return view('admin.pertanyaan', compact(['pertanyaan']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pertanyaan' => ['required']
        ]);

        PertanyaanEvaluasi::create([
            'pertanyaan' => $request->pertanyaan
        ]);

        return back()->with([
            'success' => ['Pertanyaan Evaluasi Berhasil Ditambahkan']
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function destroy($id)
    {
        $pertanyaan = PertanyaanEvaluasi::find($id);
        $pertanyaan->delete();
        return back()->with([
            'delete' => ['Pertanyaan Berhasil Dihapus']
        ]);
    }
}
