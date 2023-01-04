<?php

namespace App\Imports;

use App\Models\Upg;
use Maatwebsite\Excel\Concerns\ToModel;

class UpgsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Upg([
            'units_id'     => $row[0],
            'cost_center_cod'    => $row[1],
            'description'    => $row[2],
            'upg'    => $row[3],
        ]);
    }
}
