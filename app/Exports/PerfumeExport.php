<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;

class PerfumeExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return DB::table('perfumes')
            ->select('id', 'perfume_name', 'price', 'discount', 'desc', 'stock', 'rate', 'created_at')
            ->get();

    }

    public function headings(): array
    {
        return [
            '#',
            'perfume_name',
            'price',
            'discount',
            'desc', 'stock', 'rate',
            'created_at '

        ];
    }
}
