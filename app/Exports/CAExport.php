<?php

namespace App\Exports;

use App\Models\CA;
use Maatwebsite\Excel\Concerns\FromCollection;

class CAExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return CA::all();
    }
}
