<?php

namespace App\Http\Livewire;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\role;

class Rolelive extends Component
{
    use WithFileUploads;

        public $data, $role_name, $valid, $date, $allowed , $selected_id ;
        public $updateMode = false;

    public function render()
    {
        $this->data = role::all();
        return view('livewire.role.rolelive');
    }

    private function resetInput()
    {
        $this->role_name = '';
        $this->valid = '';
        $this->date = '';
        $this->allowed = '';
    }
    

    public function store()
    {
        $this->validate([
            'role_name' => 'required',
            'valid' => 'required',
            'date' => 'required',
            'allowed' => 'required'
        ]);
        session()->flash('message', 'Roles Created Successfully.');

        role::create([
            'role_name' => $this->role_name,
            'valid' => $this->valid,
            'date' => $this->date,
            'allowed' => $this->allowed
        ]);
        $this->resetInput();
        $this->emit('userStore');
        flash(trans('lang.added_successfully'));
    }

    public function edit($id)
    {
        $record = role::findOrFail($id);
        $this->selected_id = $id;
        $this->role_name = $record->role_name;
        $this->valid = $record->valid;
        $this->date = $record->date;
        $this->allowed = $record->allowed;
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
            'role_name' => 'required',
            'valid' => 'required',
            'date' => 'required',
            'allowed' => 'required'
        ]);

        if ($this->selected_id) {
            $record = role::find($this->selected_id);
            $record->update([
                'role_name' => $this->role_name,
                'valid' => $this->valid,
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
            $record = role::where('id', $id);
            $record->delete();
            flash(trans('lang.deleted_sucessfully'));
        }
    }
}
