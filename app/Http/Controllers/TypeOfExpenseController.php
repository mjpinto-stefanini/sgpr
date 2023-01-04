<?php

namespace App\Http\Controllers;


use App\Exports\TypeOfExpensesExport;
use App\Imports\TypeOfExpensesImport;
use App\Models\TypeOfExpense;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class TypeOfExpenseController extends Controller
{
    public function index()
    {
        $typeofexpenses = TypeOfExpense::get();

        return view('typeofexpenses', compact('typeofexpenses'));
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function export()
    {
        return Excel::download(new TypeOfExpensesExport, 'Tipo_despesas.xlsx');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function import()
    {
        Excel::import(new TypeOfExpensesImport,request()->file('file'));

        return back();
    }
}
