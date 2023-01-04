<?php

namespace App\Exports;

use App\Models\EconomicRating;
use App\Models\Unit;
use Maatwebsite\Excel\Concerns\FromCollection;

class EconomicRatingsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return EconomicRating::select("title","description")->get();
    }

    public function headings(): array
    {
        return ["title", "description"];
    }
}
