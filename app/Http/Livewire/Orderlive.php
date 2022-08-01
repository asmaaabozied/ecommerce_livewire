<?php

namespace App\Http\Livewire;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

use Livewire\Component;
use App\Models\order;
use Hash;
use Carbon\Carbon;

class Orderlive extends Component
{
    use WithPagination,
    WithFileUploads;

public $data, $date, $total , $status , $order , $selected_id ;
public $updateMode = false;
public $search;

public function render()
{        
    $this->data = order::all();

   $search = '%'.$this->search.'%';
   $query = order::where('status' , 'LIKE' , $search )
            ->orderBy('id' , 'DESC')->get();
    return view('livewire.Order.order' , ['orders' =>$query ]);
}

private function resetInput()
{
    $this->date = '';
    $this->total = '';
    $this->status = '';
}


public function store()
{
    $this->validate([
        'date' => 'required',
        'total' => 'required'
    ]);

    $order =  order::create([
        'date' => $this->date,
        'total' => $this->total,
        'status' => $this->status
    ]);

    $this->resetInput();
    $this->emit('userStore');
    // session()->flash('message', 'Positions Created Successfully.');
    flash(trans('lang.added_successfully'));
    $this->emit('userStore1');
}

public function edit($id)
{
    $record = order::findOrFail($id);
    $this->selected_id = $id;
    $this->date = $record->date;
    $this->total = $record->total;
    $this->status = $record->status;
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
        'date' => 'required',
        'total' => 'required'
    ]);

    if ($this->selected_id) {
        $record = order::find($this->selected_id);
        $record->update([
            'date' => $this->date,
        'total' => $this->total,
        'status' => $this->status
        ]);
        
        $this->updateMode = false;
        flash(trans('lang.updated_successfully'));
        $this->emit('userStore');
    }
   
}

    public function destroy($id)
    {
        if ($id) {
            $record = order::where('id', $id);
            $record->delete();
            flash(trans('lang.deleted_sucessfully'));
        }
    }
}
