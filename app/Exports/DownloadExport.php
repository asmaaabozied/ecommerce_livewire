<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;
class DownloadExport implements FromCollection,WithHeadings ,ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return  DB::table('downloads')

            ->select('id','status','total','created_at')
            ->get();

    }

    public function headings(): array
    {
        return [
            '#',
            'status',
            'total',

            'created_at '

        ];
    }
}
