<?php

namespace App\Exports;

use App\Models\TypeOfExpense;
use Maatwebsite\Excel\Concerns\FromCollection;

class TypeOfExpensesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TypeOfExpense::select("title","description")->get();
    }

    public function headings(): array
    {
        return ["title","description"];
    }
}
