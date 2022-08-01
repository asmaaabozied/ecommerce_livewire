<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;
use Livewire\WithPagination;

use Livewire\Component;
use App\Models\address;
use Hash;
use Carbon\Carbon;

class Addresslive extends Component
{
    use WithPagination,
        WithFileUploads;

    public $data, $block, $street, $apartment, $city, $region, $governorate, $address, $selected_id;
    public $updateMode = false;
    public $active;
    public $search;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {


        $search = '%' . $this->search . '%';
        $this->data['address']= address::search(trim($this->block))
            ->orderBy('id', 'DESC')->paginate(7);


        $this->data['total'] = address::count();
        return view('livewire.Address.address');
    }

    private function resetInput()
    {
        $this->block = '';
        $this->street = '';
        $this->apartment = '';
        $this->city = '';
        $this->region = '';
        $this->governorate = '';
    }


    public function store()
    {
        $this->validate([
            'block' => 'required',
            'street' => 'required',
            'apartment' => 'required',
            'city' => 'required',
            'region' => 'required',
            'governorate' => 'required'
        ]);

        $address = address::create([
            'block' => $this->block,
            'street' => $this->street,
            'apartment' => $this->apartment,
            'city' => $this->city,
            'region' => $this->region,
            'governorate' => $this->governorate
        ]);

        $this->resetInput();
        $this->emit('userStore');
        // session()->flash('message', 'Positions Created Successfully.');
        flash(trans('lang.added_successfully'));
        $this->emit('userStore1');
    }

    public function edit($id)
    {
        $record = address::findOrFail($id);
        $this->selected_id = $id;
        $this->block = $record->block;
        $this->street = $record->street;
        $this->apartment = $record->apartment;
        $this->city = $record->city;
        $this->region = $record->region;
        $this->governorate = $record->governorate;
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
            'block' => 'required',
            'street' => 'required',
            'apartment' => 'required',
            'city' => 'required',
            'region' => 'required',
            'governorate' => 'required'
        ]);

        if ($this->selected_id) {
            $record = address::find($this->selected_id);
            $record->update([
                'block' => $this->block,
                'street' => $this->street,
                'apartment' => $this->apartment,
                'city' => $this->city,
                'region' => $this->region,
                'governorate' => $this->governorate
            ]);

            $this->updateMode = false;
            flash(trans('lang.updated_successfully'));
            $this->emit('userStore');
        }

    }

    public function destroy($id)
    {
        if ($id) {
            $record = address::where('id', $id);
            $record->delete();
            flash(trans('lang.deleted_sucessfully'));
        }
    }
}
