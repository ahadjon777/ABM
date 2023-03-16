<?php

namespace App\Exports;

use App\Models\Boshqarma;
use Maatwebsite\Excel\Concerns\FromCollection;

class BoshqarmaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Boshqarma::all();
    }
}
