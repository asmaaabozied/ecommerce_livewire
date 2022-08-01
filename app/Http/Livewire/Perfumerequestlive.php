<?php

namespace App\Http\Livewire;

use App\Exports\PerfumeRequestExport;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\perfumerequest;
use Illuminate\Support\Facades\File;
use Maatwebsite\Excel\Facades\Excel;

class Perfumerequestlive extends Component
{
    use WithFileUploads;

    public $data, $req_name, $offers, $start_date, $end_date, $value_offer, $quantity, $category, $cost, $stock, $count_in_stock, $count_in_rate, $date, $selected_id;
    public $updateMode = false;
    public $AddModelOpened = false;
    public $active;
    public $status;
    protected $paginationTheme = 'bootstrap';
    public $count = 0;

    public function increment()
    {
        $count_in_rate = $this->count++;
    }

    public function render()
    {
        $this->data['perfumerequest'] = perfumerequest::latest()->when($this->active, function ($query) {

            $query->where('status', $this->active);

        })->search(trim($this->req_name))->simplePaginate(7);
        $this->data['total'] = perfumerequest::count();
        return view('livewire.perfumerequest.perfumerequestlive');
    }

    private function resetInput()
    {
        $this->req_name = '';
        $this->quantity = '';
        $this->category = '';
        $this->cost = '';
        $this->stock = '';
        $this->date = '';
        $this->value_offer = '';
    }

    public function toggleAddModal()
    {

        $this->AddModelOpened = !$this->AddModelOpened;
        $this->resetInput();

    }


    public function export()
    {
        return Excel::download(new PerfumeRequestExport(), 'perfumerequest.xlsx');
    }

    public function exportCsv()
    {
        return Excel::download(new PerfumeRequestExport(), 'perfumerequest.csv');

    }

    public function exportPdf()
    {

        return Excel::download(new PerfumeRequestExport(), 'perfumerequest.pdf');

    }

    public function store()
    {
        $this->validate([
            'req_name' => 'required',
            'quantity' => 'required',
            'category' => 'required',
            'cost' => 'required',
            'stock' => 'required',
            'date' => 'required'
        ]);
        session()->flash('message', 'Perfume Request Created Successfully.');

        perfumerequest::create([
            'req_name' => $this->req_name,
            'quantity' => $this->quantity,
            'category' => $this->category,
            'cost' => $this->cost,
            'count_in_rate' => $this->count_in_rate,
            'stock' => $this->stock,
            'date' => $this->date,

            'value_offer' => $this->value_offer,
            'end_date' => $this->end_date,
            'start_date' => $this->start_date,
            'offers' => $this->offers,
        ]);
        $this->resetInput();
        $this->emit('userStore');

    }

    public function edit($id)
    {
        $record = perfumerequest::findOrFail($id);
        $this->selected_id = $id;
        $this->req_name = $record->req_name;
        $this->quantity = $record->quantity;
        $this->category = $record->category;
        $this->cost = $record->cost;
        $this->stock = $record->stock;
        $this->date = $record->date;
        $this->value_offer = $record->value_offer;
        $this->start_date = $record->start_date;
        $this->end_date = $record->end_date;
        $this->offers = $record->offers;

        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
            'req_name' => 'required',
            'quantity' => 'required',
            'category' => 'required',
            'cost' => 'required',
            'stock' => 'required',
            'date' => 'required'
        ]);

        if ($this->selected_id) {
            $record = perfumerequest::find($this->selected_id);
            $record->update([
                'req_name' => $this->req_name,
                'quantity' => $this->quantity,
                'category' => $this->category,
                'cost' => $this->cost,
                'stock' => $this->stock,
                'date' => $this->date,
                'value_offer' => $this->value_offer,
                'end_date' => $this->end_date,
                'start_date' => $this->start_date,
                'offers' => $this->offers,
            ]);

            $this->updateMode = false;
            flash(trans('lang.updated_successfully'));
            $this->emit('userStore');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = perfumerequest::where('id', $id);
            $record->delete();
            flash(trans('lang.deleted_sucessfully'));
        }
    }
}
