<?php

namespace App\Http\Livewire;

use App\Exports\PositionExport;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\position;
use Hash;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;

class Positionlive extends Component
{
    use WithPagination,
        WithFileUploads;

    public $AddModelOpened = false;
    public $EditModelOpened = false;
    public $ShowModelOpened = false;
    public $data, $position_name, $date, $allowed, $position, $selected_id;
    public $updateMode = false;
    public $active;
    public $search;
    public $pos = [];

    public function render()
    {


        $this->data['position'] = position::orderBy('id', 'DESC')->search(trim($this->position_name))->simplePaginate(7);
        $this->data['total'] = position::count();
        return view('livewire.position.positionlive');
    }


    private function resetInput()
    {
        $this->position_name = '';
        $this->date = '';
        $this->allowed = '';
    }



    public function export()
    {
        return Excel::download(new PositionExport(), 'position.xlsx');
    }

    public function exportCsv()
    {
        return Excel::download(new PositionExport(), 'position.csv');

    }

    public function exportPdf()
    {
//        return (new UsersExport)->download('users.pdf', \Maatwebsite\Excel\Excel::MPDF);

        return Excel::download(new PositionExport(), 'position.pdf');

    }

    public function store()
    {
        $this->validate([
            'position_name' => 'required',
            'date' => 'required',
            'allowed' => 'required'
        ]);

        $position = position::create([
            'position_name' => $this->position_name,
            'date' => $this->date,
            'allowed' => $this->allowed
        ]);

        $this->resetInput();
        $this->emit('userStore');
        // session()->flash('message', 'Positions Created Successfully.');
        flash(trans('lang.added_successfully'));
        $this->AddModelOpened = false;
        $this->emit('userStore1');
    }

    public function edit($id)
    {
        $record = position::findOrFail($id);
        $this->selected_id = $id;
        $this->position_name = $record->position_name;
        $this->date = $record->date;
        $this->allowed = $record->allowed;
        $this->updateMode = true;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        $this->validate([
            'position_name' => 'required',
            'date' => 'required',
            'allowed' => 'required'
        ]);

        if ($this->selected_id) {
            $record = position::find($this->selected_id);
            $record->update([
                'position_name' => $this->position_name,
                'date' => $this->date,
                'allowed' => $this->allowed
            ]);

            $this->updateMode = false;
            flash(trans('lang.updated_successfully'));
            $this->emit('userStore');
        }

    }

    public function destroy($id)
    {
        if ($id) {
            $record = position::where('id', $id);
            $record->delete();
            flash(trans('lang.deleted_sucessfully'));
        }
    }
}
