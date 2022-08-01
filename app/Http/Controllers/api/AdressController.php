<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\address;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;

class AdressController extends Controller
{
    public $data, $block, $street, $apartment ,$city, $region , $governorate, $selected_id ;
    public $updateMode = false;

    public function index()
    {
        $address = address::get();
        return response()->json($address);
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

    public function store(Request $request){
            $address = new address();
            $address->block = $request->block;
            $address->street  = $request->street;
            $address->apartment = $request->apartment;
            $address->city = $request->city;
            $address->region  = $request->region;
            $address->governorate = $request->governorate;
            $address->save();
            flash(trans('lang.added_successfully'));
            // return redirect()->route('post.list');
    
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

    public function update()
    {
        $this->validate([
            'block' => 'required',
            'street' => 'required',
            'apartment' => 'required',
            'city' => 'required',
            'region' => 'required',
            'governorate' => 'required',
            ]);

        if ($this->selected_id) {
            $record = address::find($this->selected_id);
            $record->update([
                'block' => $this->block,
                'street' => $this->street,
                'apartment' => $this->apartment,
                'city' => $this->city,
                'region' => $this->region,
                'governorate' => $this->governorate,
            ]);
            
            $this->updateMode = false;
            flash(trans('lang.updated_successfully'));
            $this->emit('userStore');

        }
    }
}
