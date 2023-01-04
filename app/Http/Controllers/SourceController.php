<?php

namespace App\Http\Controllers;

use App\Exports\SourcesExport;
use App\Imports\SourcesImport;
use App\Models\Source;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SourceController extends Controller
{
    public function index()
    {
        $sources = Source::get();

        return view('sources', compact('sources'));
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function export()
    {
        return Excel::download(new SourcesExport, 'fontes.xlsx');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function import()
    {
        Excel::import(new SourcesImport,request()->file('file'));

        return back();
    }
}
