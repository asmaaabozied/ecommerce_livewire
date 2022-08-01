<?php

namespace App\Exports;

use App\Models\Role;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;
class RolesExport implements FromCollection,WithHeadings ,ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return  DB::table('roles')

            ->select('id','name','guard_name','created_at')
            ->get();

    }

    public function headings(): array
    {
        return [
            '#',
            'name',
            'guard_name',
            'created_at '

        ];
    }
}
