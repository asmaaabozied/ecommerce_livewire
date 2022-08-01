<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;
class MerchantExport implements FromCollection,WithHeadings ,ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return  DB::table('merchants')

            ->select('id','merchant_email','merchant_name','packages','quantity','discount','created_at')
            ->get();

    }

    public function headings(): array
    {
        return [
            '#',
            'merchant_email',
            'merchant_name',
            'packages','quantity','discount',
            'created_at '

        ];
    }
}
