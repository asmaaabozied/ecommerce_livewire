<?php

namespace App\Http\Livewire\Services;


use App\Exports\ServicesExport;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Livewire\Component;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;

class Index extends Component
{
    use WithFileUploads;

    public $AddModelOpened = false;
    public $EditModelOpened = false;
    public $ShowModelOpened = false;
    public $dates;
    public $active;
    public $name;

    public $status;
    public $data;
    protected $paginationTheme = 'bootstrap';

    public $name_ar, $name_en, $description_en, $description_ar, $service, $created_at, $uid, $image_path, $image;


    public function render()
    {

        $this->data['services'] = Service::latest()->when($this->active, function ($query) {

            $query->where('status', $this->active);

        })->search(trim($this->name))->simplePaginate(7);
        $this->data['total'] = Service::count();
        return view('livewire.services.index');
    }


    public function export()
    {
        return Excel::download(new ServicesExport(), 'services.xlsx');
    }

    public function exportCsv()
    {
        return Excel::download(new ServicesExport(), 'services.csv');

    }

    public function exportPdf()
    {
//        return (new UsersExport)->download('users.pdf', \Maatwebsite\Excel\Excel::MPDF);

        return Excel::download(new ServicesExport(), 'services.pdf');

    }

    public function save()
    {
        $this->validate([

            'name_ar' => 'required|string',
            'name_en' => 'required|string',
            'image' => 'required',


        ]);

        $service = Service::create([

            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'description_ar' => $this->description_ar,
            'description_en' => $this->description_en,
            'status' => isset($this->status) ? $this->status : 0,
        ]);

        if ($this->image) {
            $thumbnail = $this->image;
//            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $filename = $thumbnail->hashName();
            Image::make($thumbnail)->resize(300, 300)->save(public_path('/images/services/' . $filename));
            $service->image = $filename;
            $service->save();
        }


        if ($service) {
            $this->resetInput();

            flash(trans('lang.added_successfully'));

            $this->AddModelOpened = false;

        }
        $this->emit('userStore');

    }

    public function edit($id)
    {

        $service = Service::find($id);

        if ($service) {

            $this->getService($service);

        }

    }

    public function update()
    {
        $this->validate([

            'name_ar' => 'required|string',
            'name_en' => 'required|string',


        ]);

        $service = Service::find($this->uid);

        $service->update([

            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,

            'description_ar' => $this->description_ar,
            'description_en' => $this->description_en,
            'status' => isset($this->status) ? $this->status : 0,
        ]);
        if ($this->image) {
            $thumbnail = $this->image;
//            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $filename = $thumbnail->hashName();
            Image::make($thumbnail)->resize(300, 300)->save(public_path('/images/services/' . $filename));
            $service->image = $filename;
            $service->save();
        }

        if ($service) {
            $this->EditModelOpened = false;
            $this->resetInput();

            flash(trans('lang.updated_successfully'));

        }
    }

    public function show($id)
    {
        $service = Service::find($this->uid);

        if ($service) {

            $this->getService($service);

        }

    }

    public function getService($service)
    {
        $this->service = $service;
        $this->name_ar = $this->service['name_ar'];
        $this->name_en = $this->service['name_en'];
        $this->description_en = $this->service['description_en'];
        $this->description_ar = $this->service['description_ar'];
        $this->status = $this->service['status'];
        $this->image_path = $this->service['image_path'];
        $this->image = $this->service['image'];


        $this->created_at = isset($this->service['created_at']) ? Carbon::parse($this->service['created_at'])->format('Y-m-d') : '';
        $this->uid = $this->service['id'];

    }

    public function toggleShowModal($id)
    {
        $this->ShowModelOpened = !$this->ShowModelOpened;

        $service = Service::find($id);

        if ($service) {

            $this->getService($service);


        }

    }

    public function ShowModalClose()
    {
        $this->ShowModelOpened = false;

    }

    public function toggleEditModal($id)
    {

        $this->EditModelOpened = !$this->EditModelOpened;

        $service = Service::find($id);

        if ($service) {

            $this->getService($service);


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
        $this->description_en = '';
        $this->description_ar = '';
        $this->status = '';
        $this->created_at = '';
        $this->image = '';


    }

    public function destroy($id)
    {

        $service = Service::find($id);

        if ($service->image) {


            if (File::exists('images/services/' . $service->image)) {

                unlink('images/services/' . $service->image);
            }
        }
        if ($service) {
            $service->delete();

            flash(trans('lang.deleted_sucessfully'));

        }


    }
}
