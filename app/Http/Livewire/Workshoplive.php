<?php

namespace App\Http\Livewire;

use App\Exports\WorkShopExport;
use Livewire\WithFileUploads;
use App\Models\workshop;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;

class Workshoplive extends Component
{
    use WithFileUploads;

    public $data, $work_name, $quantity, $category, $price, $desc, $stock, $date, $selected_id;
    public $updateMode = false;
    public $AddModelOpened = false;
    public $active;

    public function render()
    {


        $this->data['workshop'] = workshop::orderBy('id', 'DESC')->search(trim($this->work_name))->simplePaginate(7);
        $this->data['total'] = workshop::count();
        return view('livewire.workshop.workshoplive');
    }

    private function resetInput()
    {
        $this->work_name = '';
        $this->price = '';
        $this->category = '';
        $this->desc = '';
        $this->stock = '';
        $this->quantity = '';
        $this->date = '';
    }


    public function store()
    {
        $this->validate([
            'work_name' => 'required',
            'price' => 'required',
            'category' => 'required',
            'desc' => 'required',
            'stock' => 'required',
            'quantity' => 'required',
            'date' => 'required'
        ]);

        workshop::create([
            'work_name' => $this->work_name,
            'price' => $this->price,
            'category' => $this->category,
            'desc' => $this->desc,
            'stock' => $this->stock,
            'quantity' => $this->quantity,
            'date' => $this->date
        ]);

        $this->resetInput();
        flash(trans('lang.added_successfully'));
        $this->AddModelOpened = false;

    }

    public function toggleAddModal()
    {

        $this->AddModelOpened = !$this->AddModelOpened;
        $this->resetInput();

    }

    public function export()
    {
        return Excel::download(new WorkShopExport(), 'Workshop.xlsx');
    }

    public function exportCsv()
    {
        return Excel::download(new WorkShopExport(), 'Workshop.csv');

    }

    public function exportPdf()
    {

        return Excel::download(new WorkShopExport(), 'Workshop.pdf');

    }


    public function edit($id)
    {
        $record = workshop::findOrFail($id);
        $this->selected_id = $id;
        $this->work_name = $record->work_name;
        $this->price = $record->price;
        $this->category = $record->category;
        $this->desc = $record->desc;
        $this->stock = $record->stock;
        $this->quantity = $record->quantity;
        $this->date = $record->date;
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
            'work_name' => 'required',
            'price' => 'required',
            'category' => 'required',
            'desc' => 'required',
            'stock' => 'required',
            'quantity' => 'required',
            'date' => 'required'
        ]);

        if ($this->selected_id) {
            $record = workshop::find($this->selected_id);
            $record->update([
                'work_name' => $this->work_name,
                'price' => $this->price,
                'category' => $this->category,
                'desc' => $this->desc,
                'stock' => $this->stock,
                'quantity' => $this->quantity,
                'date' => $this->date
            ]);

            $this->updateMode = false;
            flash(trans('lang.updated_successfully'));
            $this->emit('userStore');

        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = workshop::where('id', $id);
            $record->delete();
            flash(trans('lang.deleted_sucessfully'));
        }
    }
}
