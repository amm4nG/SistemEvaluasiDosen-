<?php

namespace App\Imports;

use App\Models\PengampuhMatakuliah;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PengampuhMatakuliahImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    private $id_prodi;
    private $id_periode;

    public function __construct($id_prodi, $id_periode) {
        $this->id_periode = $id_periode;
        $this->id_prodi = $id_prodi;
    }

    public function model(array $row)
    {
        return new PengampuhMatakuliah([
            'id_prodi' => $this->id_prodi,
            'kode_matakuliah' => $row['kode_matakuliah'],
            'nidn' => $row['nidn'],
            'id_periode' => $this->id_periode,
        ]);
    }
}
