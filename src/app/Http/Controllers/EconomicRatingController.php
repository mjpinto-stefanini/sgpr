<?php

namespace App\Http\Controllers;

use App\Exports\EconomicRatingsExport;
use App\Imports\EconomicRatingsImport;
use App\Models\EconomicRating;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class EconomicRatingController extends Controller
{
    public function index()
    {
        $economicratings = EconomicRating::get();

        return view('economic-ratings', compact('economicratings'));
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function export()
    {
        return Excel::download(new EconomicRatingsExport, 'classes-economicas.xlsx');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function import()
    {
        Excel::import(new EconomicRatingsImport,request()->file('file'));

        return back();
    }
}
