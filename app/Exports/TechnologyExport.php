<?php

namespace App\Exports;

use App\Models\Technology;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TechnologyExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(Technology::getAllTechnology());
    }

    public function heading():array{
        return [
            'id',
            'qurilma_nomi',
            'formulyar_raqami',
            'model',
            'seria_nomer',
            'ozu_hajmi',
            'qmd_model',
            'qmd_nomer',
            'ssd_model',
            'ssd_nomer',
            'monitor1_model',
            'monitor1_nomer',
            'monitor2_model',
            'monitor2_nomer',
            'ishlabchiqarilgan_sana',
            'hisobgaolingan_sana',
            'olindi',
            'topshirildi'
        ];
    }
}
