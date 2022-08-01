<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;
class PerfumeRequestExport implements FromCollection,WithHeadings ,ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return  DB::table('perfumerequests')

            ->select('id','req_name','quantity','category','cost','stock','created_at')
            ->get();

    }

    public function headings(): array
    {
        return [
            '#',
            'req_name',
            'quantity',
            'category','cost','stock',
            'created_at '

        ];
    }
}
