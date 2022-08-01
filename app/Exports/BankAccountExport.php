<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;

class BankAccountExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return DB::table('bank_accounts')
            ->select('id', 'first_name', 'name_ar', 'name_en', 'email', 'number', 'iban', 'created_at')
            ->get();

    }

    public function headings(): array
    {
        return [
            '#', 'first_name',
            'name_ar',
            'name_en', 'email',
            'number', 'iban',
            'created_at '

        ];
    }
}
