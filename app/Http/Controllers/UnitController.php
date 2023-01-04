<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UnitsExport;
use App\Imports\UnitsImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Unit;


class UnitController extends Controller
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function index()
    {
        $units = Unit::get();

        return view('units', compact('units'));
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function export()
    {
        return Excel::download(new UnitsExport, 'units.xlsx');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function import()
    {
        Excel::import(new UnitsImport,request()->file('file'));

        return back();
    }
}
