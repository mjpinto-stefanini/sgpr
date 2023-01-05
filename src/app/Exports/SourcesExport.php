<?php

namespace App\Exports;

use App\Models\Source;
use Maatwebsite\Excel\Concerns\FromCollection;

class SourcesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Source::select("title","description")->get();
    }

    public function headings(): array
    {
        return ["title", "description"];
    }
}
