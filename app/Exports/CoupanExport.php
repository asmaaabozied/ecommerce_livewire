<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;
class CoupanExport implements FromCollection,WithHeadings ,ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DB::table('coupons')
            ->select('id', 'name','value', 'start_date','end_date' ,'code', 'created_at')
            ->get();

    }

    public function headings(): array
    {
        return [
            '#','name',
            'value',
            'start_date','end_date', 'code',
            'created_at '

        ];
    }
}
