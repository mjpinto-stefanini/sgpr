<?php

namespace App\Exports;

use App\Models\Upg;
use Maatwebsite\Excel\Concerns\FromCollection;

class UpgsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Upg::select("upg","description")->get();
    }

    public function headings(): array
    {
        return ["upg","description"];
    }
}
