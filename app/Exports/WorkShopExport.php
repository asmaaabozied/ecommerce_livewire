<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;
class WorkShopExport implements FromCollection,WithHeadings ,ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return  DB::table('workshops')

            ->select('id','work_name','date','price','category','stock','quantity','created_at')
            ->get();

    }

    public function headings(): array
    {
        return [
            '#',
            'work_name',
            'date',
            'price','category','stock','quantity',
            'created_at '

        ];
    }
}
