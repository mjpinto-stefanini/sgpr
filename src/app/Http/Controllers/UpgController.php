<?php

namespace App\Http\Controllers;

use App\Exports\UpgsExport;
use App\Imports\UpgsImport;
use App\Models\Upg;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UpgController extends Controller
{
    public function index()
    {
        $upgs = Upg::get();

        return view('upgs', compact('upgs'));
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function export()
    {
        return Excel::download(new UpgsExport, 'upgs.xlsx');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function import()
    {
        Excel::import(new UpgsImport,request()->file('file'));

        return back();
    }
}
