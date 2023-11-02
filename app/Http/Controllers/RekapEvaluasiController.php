<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Matakuliah;
use App\Models\PengampuhMatakuliah;
use App\Models\Periode;
use App\Models\PertanyaanEvaluasi;
use App\Models\Prodi;
use App\Models\RekapEvaluasi;
use App\Models\Saran;
use Illuminate\Http\Request;

class RekapEvaluasiController extends Controller
{
    // fungsi untuk mengambil rekap evluasi
    // public function index()
    // {
    //     // ambil semua pertanyaan
    //     $pertanyaan = PertanyaanEvaluasi::all();

    //     // looping pertanyaan
    //     // foreach ($pertanyaan as $p) {
    //     //     // tampilkan pertanyaan
    //     //     echo $p->pertanyaan . '<br>';
    //     //     // ambil data rekap evaluasi
    //     //     $rekap = RekapEvaluasi::select('nilai')
    //     //         ->join('pengampuh_matakuliah', 'pengampuh_matakuliah.id', '=', 'rekap_evaluasi.id_pengampuh')
    //     //         ->join('pertanyaan_evaluasi', 'pertanyaan_evaluasi.id', '=', 'rekap_evaluasi.id_pertanyaan')
    //     //         ->where('pengampuh_matakuliah.nidn', '0014119302')
    //     //         ->where('pengampuh_matakuliah.kode_matakuliah', 'INF042219')
    //     //         ->where('pertanyaan_evaluasi.id', $p->id)
    //     //         ->get();
    //     //     // menampung nilai pertanyaan
    //     //     ${'pertanyaan' . $p->id} = [];
    //     //     foreach ($rekap as $r) {
    //     //         array_push(${'pertanyaan' . $p->id}, $r->nilai);
    //     //     }
    //     //     // menghitung jumlah nilai yang sama
    //     //     ${'data' . $p->id} = array_count_values(${'pertanyaan' . $p->id});
    //     //     foreach ($nilai as $n) {
    //     //         // cek apakah nilai ada dalam array data
    //     //         if (isset(${'data' . $p->id}[$n])) {
    //     //             $count = ${'data' . $p->id}[$n];
    //     //         } else {
    //     //             $count = 0;
    //     //         }
    //     //         echo $n . ' : ' . $count . '<br>';
    //     //     }
    //     // }

    //     // Inisialisasi array data
    //     $data = [];
    //     $ipPerangkat = [];

    //     // Looping pertanyaan
    //     foreach ($pertanyaan as $p) {
    //         // Tampilkan pertanyaan
    //         $data[$p->id]['pertanyaan'] = $p->pertanyaan;

    //         // Ambil data rekap evaluasi
    //         $rekap = RekapEvaluasi::select('nilai', 'ip_perangkat')
    //             ->join('pengampuh_matakuliah', 'pengampuh_matakuliah.id', '=', 'rekap_evaluasi.id_pengampuh')
    //             ->join('pertanyaan_evaluasi', 'pertanyaan_evaluasi.id', '=', 'rekap_evaluasi.id_pertanyaan')
    //             ->where('pengampuh_matakuliah.nidn', '0014119302')
    //             ->where('pengampuh_matakuliah.kode_matakuliah', 'INF042219')
    //             ->where('pertanyaan_evaluasi.id', $p->id)
    //             ->get();

    //         // Menampung nilai pertanyaan
    //         $nilaiPertanyaan = [];
    //         foreach ($rekap as $r) {
    //             array_push($nilaiPertanyaan, $r->nilai);
    //             array_push($ipPerangkat, $r->ip_perangkat);
    //         }

    //         // Menghitung jumlah nilai yang sama
    //         $data[$p->id]['data'] = array_count_values($nilaiPertanyaan);
    //     }
    //     $jumlahPengevaluasi = count(array_unique($ipPerangkat));
    //     // Mengirim data ke Blade Laravel
    //     return view('admin.rekap', compact(['data', 'jumlahPengevaluasi']));
    // }

    public function index()
    {
        abort(404);
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create(Request $request)
    // {
    //     $dosen = Dosen::where('id_prodi', $request->id_prodi)->get();
    //     return response()->json($dosen);
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dosen = Dosen::where('nidn', $request->nidn)->first();
        $matakuliah = Matakuliah::where('kode_matakuliah', $request->kode_matakuliah)->first();
        $id_prodi = $request->id_prodi;
        $pertanyaan = PertanyaanEvaluasi::all();
        $data = [];
        $ipPerangkat = [];

        // Looping pertanyaan
        foreach ($pertanyaan as $p) {
            // Tampilkan pertanyaan
            $data[$p->id]['pertanyaan'] = $p->pertanyaan;

            // Ambil data rekap evaluasi
            $rekap = RekapEvaluasi::select('nilai', 'ip_perangkat')
                ->join('pengampuh_matakuliah', 'pengampuh_matakuliah.id', '=', 'rekap_evaluasi.id_pengampuh')
                ->join('pertanyaan_evaluasi', 'pertanyaan_evaluasi.id', '=', 'rekap_evaluasi.id_pertanyaan')
                ->where('pengampuh_matakuliah.nidn', $request->nidn)
                ->where('pengampuh_matakuliah.kode_matakuliah', $request->kode_matakuliah)
                ->where('pertanyaan_evaluasi.id', $p->id)
                ->get();

            // Menampung nilai pertanyaan
            $nilaiPertanyaan = [];
            foreach ($rekap as $r) {
                array_push($nilaiPertanyaan, $r->nilai);
                array_push($ipPerangkat, $r->ip_perangkat);
            }

            // Menghitung jumlah nilai yang sama
            $data[$p->id]['data'] = array_count_values($nilaiPertanyaan);
        }
        // ambil jumlah mahasiswa yang mengevaluasi
        $jumlahPengevaluasi = count(array_unique($ipPerangkat));

        $saran = Saran::where('nidn', $request->nidn)
            ->where('kode_matakuliah', $request->kode_matakuliah)
            ->get();
        return view('admin.informatika.dosen-rekap', compact(['data', 'jumlahPengevaluasi', 'id_prodi', 'saran', 'matakuliah', 'dosen']));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $prodi = Prodi::find($id);
        $periode = Periode::all();
        // $pengampuh = PengampuhMatakuliah::join('periode', 'periode.id', '=', 'pengampuh_matakuliah.id_periode')
        //     ->join('dosen', 'dosen.nidn', '=', 'pengampuh_matakuliah.nidn')
        //     ->join('matakuliah', 'matakuliah.kode_matakuliah', '=', 'pengampuh_matakuliah.kode_matakuliah')
        //     ->where('pengampuh_matakuliah.id_prodi', $id)
        //     ->get();
        return view('admin.rekap', compact(['id', 'prodi', 'periode']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $pengampuh = PengampuhMatakuliah::join('periode', 'periode.id', '=', 'pengampuh_matakuliah.id_periode')
        ->join('dosen', 'dosen.nidn', '=', 'pengampuh_matakuliah.nidn')
        ->join('matakuliah', 'matakuliah.kode_matakuliah', '=', 'pengampuh_matakuliah.kode_matakuliah')
        ->where('pengampuh_matakuliah.id_prodi', $request->id_prodi)
        ->where('id_periode', $id)
        ->get();
        return response()->json([
            'pengampuh' => $pengampuh
        ]);
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
