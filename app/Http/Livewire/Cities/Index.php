<?php

namespace App\Http\Livewire\Cities;


use App\Exports\CitiesExport;
use App\Models\City;
use App\Models\Country;
use Carbon\Carbon;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;

class Index extends Component
{

    public $AddModelOpened = false;
    public $EditModelOpened = false;
    public $ShowModelOpened = false;
    public $dates;
    public $active;
    public $name;

    public $status;
    public $data;
    protected $paginationTheme = 'bootstrap';

    public $name_ar, $name_en, $city, $created_at, $uid, $country_id, $countries;


    public function render()
    {

        $this->data['cities'] = City::latest()->when($this->active, function ($query) {

            $query->where('status', $this->active);

        })->search(trim($this->name))->simplePaginate(7);
        $this->data['total'] = City::count();
        $this->data['countries'] = Country::get();

        return view('livewire.cities.index');
    }


    public function export()
    {
        return Excel::download(new CitiesExport(), 'cities.xlsx');
    }

    public function exportCsv()
    {
        return Excel::download(new CitiesExport(), 'cities.csv');

    }

    public function exportPdf()
    {
//        return (new UsersExport)->download('users.pdf', \Maatwebsite\Excel\Excel::MPDF);

        return Excel::download(new CitiesExport(), 'cities.pdf');

    }

    public function save()
    {

        $this->validate([

            'name_ar' => 'required|string',
            'name_en' => 'required|string',
            'country_id' => 'required',


        ]);

        $city = City::create([

            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'country_id' => $this->country_id,

            'status' => isset($this->status) ? $this->status : 0,
        ]);


        if ($city) {
            $this->resetInput();

            flash(trans('lang.added_successfully'));

            $this->AddModelOpened = false;

        }


    }

    public function edit($id)
    {

        $city = City::find($id);

        if ($city) {

            $this->getCity($city);

        }

    }

    public function update()
    {
        $this->validate([

            'name_ar' => 'required|string',
            'name_en' => 'required|string',


        ]);

        $city = City::find($this->uid);

        $city->update([

            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'country_id' => $this->country_id,

            'status' => isset($this->status) ? $this->status : 0,
        ]);


        if ($city) {
            $this->EditModelOpened = false;
            $this->resetInput();

            flash(trans('lang.updated_successfully'));

        }
    }

    public function show($id)
    {
        $city = City::find($id);

        if ($city) {

            $this->getCity($city);

        }

    }

    public function getCity($city)
    {
        $this->city = $city;
        $this->name_ar = $this->city['name_ar'];
        $this->name_en = $this->city['name_en'];
        $this->country_id = $this->city['country_id'];
        $this->countries = Country::get();
        $this->status = $this->city['status'];


        $this->created_at = isset($this->city['created_at']) ? Carbon::parse($this->city['created_at'])->format('Y-m-d') : '';
        $this->uid = $this->city['id'];

    }

    public function toggleShowModal($id)
    {
        $this->ShowModelOpened = !$this->ShowModelOpened;

        $city = City::find($id);

        if ($city) {

            $this->getCity($city);


        }

    }

    public function ShowModalClose()
    {
        $this->ShowModelOpened = false;

    }

    public function toggleEditModal($id)
    {

        $this->EditModelOpened = !$this->EditModelOpened;

        $city = City::find($id);

        if ($city) {

            $this->getCity($city);


        }
    }

    public function toggleEditCloseModal()
    {
        $this->EditModelOpened = false;

    }


    public function toggleAddModal()
    {

        $this->AddModelOpened = !$this->AddModelOpened;
        $this->resetInput();

    }

    public function resetInput()
    {

        $this->name_ar = '';
        $this->name_en = '';
        $this->country_id = '';

        $this->status = '';
        $this->created_at = '';


    }

    public function destroy($id)
    {

        $city = City::find($id);


        if ($city) {
            $city->delete();

            flash(trans('lang.deleted_sucessfully'));

        }


    }
}
