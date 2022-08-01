<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;

class AccountDetailsExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return DB::table('account_details')
            ->select('id', 'account_email', 'first_name', 'last_name', 'address', 'created_at')
            ->get();

    }

    public function headings(): array
    {
        return [
            '#',
            'account_email',
            'first_name',
            'last_name',
            'address',
            'created_at '

        ];
    }
}
