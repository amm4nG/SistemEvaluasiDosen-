<?php

namespace App\Imports;

use App\Models\Dosen;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DosenImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    private $id_prodi;
    public function __construct($id_prodi)
    {
        $this->id_prodi = $id_prodi;
    }
    public function model(array $row)
    {
        return new Dosen([
            'id_prodi' => $this->id_prodi,
            'nidn' => $row['nidn'],
            'nama_dosen' => $row['nama_dosen'],
        ]);
    }
}
