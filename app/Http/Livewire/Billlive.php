<?php

namespace App\Http\Livewire;

use App\Exports\BillExport;
use App\Models\bill;
use Hash;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;

class Billlive extends Component
{
    public $data, $client_email, $username, $phone, $address, $quantity, $total, $discount, $subtotal, $product, $shipingcompany, $selected_id;
    public $updateMode = false;
    public $name;
    protected $paginationTheme = 'bootstrap';


    public function render()
    {
        $this->data['bill'] = bill::latest()->search(trim($this->username))->simplePaginate(7);
        $this->data['total'] = bill::count();
        return view('livewire.bill.billlive');
    }


    public function export()
    {
        return Excel::download(new BillExport(), 'bill.xlsx');
    }

    public function exportCsv()
    {
        return Excel::download(new BillExport(), 'bill.csv');

    }

    public function exportPdf()
    {

        return Excel::download(new BillExport(), 'bill.pdf');

    }

    public function destroy($id)
    {
        if ($id) {
            $record = bill::where('id', $id);
            $record->delete();
            flash(trans('lang.deleted_sucessfully'));
        }
    }
}
