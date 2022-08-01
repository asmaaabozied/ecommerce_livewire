<?php

namespace App\Http\Livewire\Packagefeatures;


use App\Exports\FeaturesExport;
use App\Models\Package;
use App\Models\PackageFeature;
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

    public $name_ar, $name_en, $country, $created_at,$packagefeature, $uid;


    public function render()
    {

        $this->data['packagefeatures'] = PackageFeature::latest()->when($this->active, function ($query) {

            $query->where('status', $this->active);

        })->search(trim($this->name))->simplePaginate(7);
        $this->data['total'] = PackageFeature::count();
        return view('livewire.packagefeatures.index');
    }

    public function export()
    {
        return Excel::download(new FeaturesExport(), 'features.xlsx');
    }

    public function exportCsv()
    {
        return Excel::download(new FeaturesExport(), 'features.csv');

    }

    public function exportPdf()
    {
//        return (new UsersExport)->download('users.pdf', \Maatwebsite\Excel\Excel::MPDF);

        return Excel::download(new FeaturesExport(), 'features.pdf');

    }




    public function save()
    {
        $this->validate([

            'name_ar' => 'required|string',
            'name_en' => 'required|string',


        ]);

        $packagefeature = PackageFeature::create([

            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,

            'status' => isset($this->status) ? $this->status : 0,
        ]);


        if ($packagefeature) {
            $this->resetInput();

            flash(trans('lang.added_successfully'));

            $this->AddModelOpened = false;

        }


    }

    public function edit($id)
    {

        $packagefeature = PackageFeature::find($id);

        if ($packagefeature) {

            $this->getPackage($packagefeature);

        }

    }

    public function update()
    {
        $this->validate([

            'name_ar' => 'required|string',
            'name_en' => 'required|string',


        ]);

        $packagefeature = PackageFeature::find($this->uid);

        $packagefeature->update([

            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,

            'status' => isset($this->status) ? $this->status : 0,
        ]);


        if ($packagefeature) {
            $this->EditModelOpened = false;
            $this->resetInput();

            flash(trans('lang.updated_successfully'));

        }
    }

    public function show($id)
    {
        $packagefeature = PackageFeature::find($id);

        if ($packagefeature) {

            $this->getPackage($packagefeature);

        }

    }

    public function getPackage($packagefeature)
    {
        $this->packagefeature = $packagefeature;
        $this->name_ar = $this->packagefeature['name_ar'];
        $this->name_en = $this->packagefeature['name_en'];

        $this->status = $this->packagefeature['status'];


        $this->created_at = isset($this->packagefeature['created_at']) ? Carbon::parse($this->packagefeature['created_at'])->format('Y-m-d') : '';
        $this->uid = $this->packagefeature['id'];

    }

    public function toggleShowModal($id)
    {
        $this->ShowModelOpened = !$this->ShowModelOpened;

        $packagefeature = PackageFeature::find($id);

        if ($packagefeature) {

            $this->getPackage($packagefeature);


        }

    }

    public function ShowModalClose()
    {
        $this->ShowModelOpened = false;

    }

    public function toggleEditModal($id)
    {

        $this->EditModelOpened = !$this->EditModelOpened;

        $packagefeature = PackageFeature::find($id);

        if ($packagefeature) {

            $this->getPackage($packagefeature);


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

        $packagefeature = PackageFeature::find($id);


        if ($packagefeature) {
            $packagefeature->delete();

            flash(trans('lang.deleted_sucessfully'));

        }


    }
}
