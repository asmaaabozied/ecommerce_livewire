<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;
class PartnersExport implements FromCollection,WithHeadings ,ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DB::table('partner_requests')
            ->select('id', 'full_name', 'email','age','phone','money', 'created_at')
            ->get();

    }

    public function headings(): array
    {
        return [
            '#',
            'full_name',
            'email','age','phone','money',
            'created_at '

        ];
    }
}
