<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;
class PositionExport implements FromCollection,WithHeadings ,ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return  DB::table('positions')

            ->select('id','position_name','date','allowed','created_at')
            ->get();

    }

    public function headings(): array
    {
        return [
            '#',
            'position_name',
            'date',
            'allowed',
            'created_at '

        ];
    }
}
