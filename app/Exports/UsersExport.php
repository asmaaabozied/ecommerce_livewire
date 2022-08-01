<?php

namespace App\Exports;


use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings ;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use DB;
class UsersExport implements FromCollection ,WithHeadings ,ShouldAutoSize
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return  DB::table('users')
       
           ->select('id','last_name','phone','email')
           ->get();
      
    }

     public function headings(): array
    {
        return [
            '#',
            'name',
            'phone',
            'email '
            
        ];
    }
}
