<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;

class TicketExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return DB::table('tickets')
            ->select('id', 'type', 'content', 'subject', 'created_at')
            ->get();

    }

    public function headings(): array
    {
        return [
            '#',
            'type',
            'content',
            'subject',
            'created_at '

        ];
    }
}
