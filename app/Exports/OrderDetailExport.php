<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;

class OrderDetailExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return DB::table('order_details')
            ->select('id', 'total', 'subtotal', 'payment_method', 'shipping', 'paid', 'amount', 'created_at')
            ->get();

    }

    public function headings(): array
    {
        return [
            '#',
            'total',
            'subtotal',
            'payment_method', 'shipping', 'paid', 'amount',
            'created_at '

        ];
    }
}
