<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\PengampuhMatakuliah;
use App\Models\Periode;
use App\Models\PertanyaanEvaluasi;
use App\Models\Prodi;
use App\Models\RekapEvaluasi;
use App\Models\Saran;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function informatika()
    {
        $dosen = Dosen::where('id_prodi', 1)->get();
        return view('informatika.informatika', compact(['dosen']));
    }

    public function sipil()
    {
        $dosen = Dosen::where('id_prodi', 2)->get();
        return view('sipil.sipil', compact(['dosen']));
    }

    public function pwk()
    {
        $dosen = Dosen::where('id_prodi', 3)->get();
        return view('pwk.pwk', compact(['dosen']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'id_prodi' => ['required'],
                'nidn' => ['required'],
                'kode_matakuliah' => ['required'],
            ],
            [
                'kode_matakuliah.required' => 'Tidak Ada Matakuliah Yang Dipilih',
            ],
        );
        // cari periode yang berstatus on
        $periode = Periode::where('status', 'on')->first();

        // ambil data pengampuh matakuliah
        $pengampuh = PengampuhMatakuliah::select('pengampuh_matakuliah.id', 'nama_matakuliah')
            ->join('matakuliah', 'matakuliah.kode_matakuliah', '=', 'pengampuh_matakuliah.kode_matakuliah')
            ->where('pengampuh_matakuliah.nidn', $request->nidn)
            ->where('pengampuh_matakuliah.id_prodi', $request->id_prodi)
            ->where('pengampuh_matakuliah.kode_matakuliah', $request->kode_matakuliah)
            ->where('id_periode', $periode->id)
            ->first();

        // ambil ip perangkat user
        $ip = $request->ip();

        // ambil semua pertanyaan
        $pertanyaan = PertanyaanEvaluasi::all();

        // cari rekap evaluasi berdasarkan ip perangkat
        $rekap = RekapEvaluasi::where('ip_perangkat', $ip)
            ->where('id_pengampuh', $pengampuh->id)
            ->first();

        // kembalikan gagal jika sudah melakukan evaluasi
        if (optional($rekap)->count() > 0) {
            return back()->withErrors([
                'gagal' => 'Anda Sudah Melakukan Evaluasi Pada Dosen Ini Dengan Matakuliah ' . $pengampuh->nama_matakuliah . '.',
            ]);
        } else {
            foreach ($pertanyaan as $p) {
                RekapEvaluasi::create([
                    'nilai' => $request->input('nilai-' . $p->id),
                    'ip_perangkat' => $ip,
                    'id_pengampuh' => $pengampuh->id,
                    'id_pertanyaan' => $p->id,
                    'id_periode' => $periode->id,
                ]);
            }

            if ($request->saran != null || $request->saran != '') {
                Saran::create([
                    'id_pengampuh' => $pengampuh->id,
                    'nidn' => $request->nidn,
                    'kode_matakuliah' => $request->kode_matakuliah,
                    'id_periode' => $periode->id,
                    'saran' => $request->saran,
                ]);
            }

            return back()->with([
                'success' => 'Terimakasih Telah Melakukan Evaluasi',
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $dosen = Dosen::find($id);
        $matakuliah = PengampuhMatakuliah::join('matakuliah', 'matakuliah.kode_matakuliah', '=', 'pengampuh_matakuliah.kode_matakuliah')
            ->join('dosen', 'dosen.nidn', '=', 'pengampuh_matakuliah.nidn')
            ->where('pengampuh_matakuliah.nidn', $dosen->nidn)
            ->get();
        $pertanyaan = PertanyaanEvaluasi::all();
        return view('informatika.evaluasi', compact(['dosen', 'matakuliah', 'pertanyaan']));
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
