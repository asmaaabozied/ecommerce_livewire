<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Contact;

class Contactlive extends Component
{
    public $data, $name, $email, $selected_id ;
    public $updateMode = false;

    public function render()
    {
        $this->data = Contact::all();
        return view('livewire.contact.contactlive');
    }

    private function resetInput()
    {
        $this->name = '';
        $this->email = '';
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|min:5',
            'email' => 'required|email:rfc,dns'
        ]);

        Contact::create([
            'name' => $this->name,
            'email' => $this->email
        ]);
        $this->resetInput();
    }

    public function edit($id)
    {
        $record = Contact::findOrFail($id);
        $this->selected_id = $id;
        $this->name = $record->name;
        $this->email = $record->email;
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
            'selected_id' => 'required|numeric',
            'name' => 'required|min:5',
            'email' => 'required|email:rfc,dns'
        ]);
        if ($this->selected_id) {
            $record = Contact::find($this->selected_id);
            $record->update([
                'name' => $this->name,
                'email' => $this->email
            ]);
            $this->resetInput();
            $this->updateMode = false;
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Contact::where('id', $id);
            $record->delete();
        }
    }
}
