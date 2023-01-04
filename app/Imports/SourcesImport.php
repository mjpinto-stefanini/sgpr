<?php

namespace App\Imports;

use App\Models\Source;
use Maatwebsite\Excel\Concerns\ToModel;

class SourcesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {


        return new Source([
            'title'     => $row[0],
            'description'    => $row[1],
        ]);
    }
}
