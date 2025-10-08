<?php

namespace App\Imports;

use App\Models\Orphan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class OrphansImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
//logger($row);

       if (empty($row['رقم الهوية'])) {
        return null; // تجاهل الصفوف الفارغة
    }

    return new Orphan(attributes: [
        'id_no'    => $row['رقم الهوية'] ?? null,
        'full_name'=> $row['الإسم'] ?? null,
    ]);
}
}
