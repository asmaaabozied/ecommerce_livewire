<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;

class BillExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return DB::table('bills')
            ->select('id', 'client_email', 'username', 'phone', 'address', 'quantity', 'discount', 'created_at')
            ->get();

    }

    public function headings(): array
    {
        return [
            '#',
            'client_email',
            'username',
            'phone', 'address', 'quantity', 'discount',
            'created_at '

        ];
    }
}
