<?php

namespace App\Http\Livewire\Countries;


use App\Exports\CountriesExport;
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

    public $name_ar, $name_en,$country, $created_at, $uid;


    public function render()
    {

        $this->data['countries'] = Country::latest()->when($this->active, function ($query) {

            $query->where('status', $this->active);

        })->search(trim($this->name))->simplePaginate(7);
        $this->data['total'] = Country::count();
        return view('livewire.countries.index');
    }

    public function export()
    {
        return Excel::download(new CountriesExport(), 'countries.xlsx');
    }

    public function exportCsv()
    {
        return Excel::download(new CountriesExport(), 'countries.csv');

    }

    public function exportPdf()
    {
//        return (new CountriesExport)->download('users.pdf', \Maatwebsite\Excel\Excel::MPDF);

        return Excel::download(new CountriesExport(), 'countries.pdf');

    }


    public function save()
    {
        $this->validate([

            'name_ar' => 'required|string',
            'name_en' => 'required|string',


        ]);

        $country = Country::create([

            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,

            'status' => isset($this->status) ? $this->status : 0,
        ]);


        if ($country) {
            $this->resetInput();

            flash(trans('lang.added_successfully'));

            $this->AddModelOpened = false;

        }


    }

    public function edit($id)
    {

        $country = Country::find($id);

        if ($country) {

            $this->getCountry($country);

        }

    }

    public function update()
    {
        $this->validate([

            'name_ar' => 'required|string',
            'name_en' => 'required|string',


        ]);

        $country = Country::find($this->uid);

        $country->update([

            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,

            'status' => isset($this->status) ? $this->status : 0,
        ]);


        if ($country) {
            $this->EditModelOpened = false;
            $this->resetInput();

            flash(trans('lang.updated_successfully'));

        }
    }

    public function show($id)
    {
        $country = Country::find($id);

        if ($country) {

            $this->getCountry($country);

        }

    }

    public function getCountry($country)
    {
        $this->country = $country;
        $this->name_ar = $this->country['name_ar'];
        $this->name_en = $this->country['name_en'];

        $this->status = $this->country['status'];


        $this->created_at = isset($this->country['created_at']) ? Carbon::parse($this->country['created_at'])->format('Y-m-d') : '';
        $this->uid = $this->country['id'];

    }

    public function toggleShowModal($id)
    {
        $this->ShowModelOpened = !$this->ShowModelOpened;

        $country = Country::find($id);

        if ($country) {

            $this->getCountry($country);


        }

    }

    public function ShowModalClose()
    {
        $this->ShowModelOpened = false;

    }

    public function toggleEditModal($id)
    {

        $this->EditModelOpened = !$this->EditModelOpened;

        $country = Country::find($id);

        if ($country) {

            $this->getCountry($country);


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


        $this->status = '';
        $this->created_at = '';


    }

    public function destroy($id)
    {

        $country = Country::find($id);


        if ($country) {
            $country->delete();

            flash(trans('lang.deleted_sucessfully'));

        }


    }
}
