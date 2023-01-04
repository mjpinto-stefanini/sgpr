<?php

namespace App\Imports;

use App\Models\TypeOfExpense;
use Maatwebsite\Excel\Concerns\ToModel;

class TypeOfExpensesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
       return new TypeOfExpense([
            'title'     => $row[0],
            'description'    => $row[1],
        ]);
    }
}
