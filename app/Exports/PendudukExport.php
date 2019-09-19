<?php

namespace App\Exports;

use App\PendudukM;
use Maatwebsite\Excel\Concerns\FromCollection;

class PendudukExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PendudukM::all();
    }
}
