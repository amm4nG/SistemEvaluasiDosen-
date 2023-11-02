<?php

namespace App\Imports;

use App\Models\Matakuliah;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MatakuliahImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    private $id_prodi;
    public function __construct($id_prodi) {
        $this->id_prodi = $id_prodi;
    }
    public function model(array $row)
    {
        return new Matakuliah([
            'kode_matakuliah' => $row['kode_matakuliah'],
            'nama_matakuliah' => $row['nama_matakuliah'],
            'id_prodi' => $this->id_prodi
        ]);
    }
}
