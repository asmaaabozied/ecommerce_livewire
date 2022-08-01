<?php

namespace App\Http\Livewire\Packages;


use App\Exports\PackagesExport;
use App\Models\Package;
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

    public $name_ar, $rate, $image, $count_in_rate, $name_en, $package, $created_at, $price, $duration, $type, $uid;


    public function render()
    {

        $this->data['packages'] = Package::latest()->when($this->active, function ($query) {

            $query->where('status', $this->active);

        })->search(trim($this->name))->simplePaginate(7);
        $this->data['total'] = Package::count();
        return view('livewire.packages.index');
    }


    public function export()
    {
        return Excel::download(new PackagesExport(), 'packages.xlsx');
    }

    public function exportCsv()
    {
        return Excel::download(new PackagesExport(), 'packages.csv');

    }

    public function exportPdf()
    {
//        return (new UsersExport)->download('users.pdf', \Maatwebsite\Excel\Excel::MPDF);

        return Excel::download(new PackagesExport(), 'packages.pdf');

    }


    public function save()
    {
        $this->validate([

            'name_ar' => 'required|string',
            'name_en' => 'required|string',


        ]);

        $package = Package::create([

            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'type' => $this->type,
            'price' => $this->price,
            'duration' => $this->duration,
            'rate' => $this->rate,
            'count_in_rate' => $this->count_in_rate,

            'status' => isset($this->status) ? $this->status : 0,
        ]);


        if ($this->image) {
            $thumbnail = $this->image;
            $filename = $thumbnail->hashName();
            Image::make($thumbnail)->resize(300, 300)->save(public_path('/images/packages/' . $filename));
            $package->image = $filename;
            $package->save();
        }

        if ($package) {
            $this->resetInput();

            flash(trans('lang.added_successfully'));

            $this->AddModelOpened = false;

        }


    }

    public function edit($id)
    {

        $package = Package::find($id);

        if ($package) {

            $this->getPackage($package);

        }

    }

    public function update()
    {
        $this->validate([

            'name_ar' => 'required|string',
            'name_en' => 'required|string',


        ]);

        $package = Package::find($this->uid);

        $package->update([
            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'type' => $this->type,
            'price' => $this->price,
            'duration' => $this->duration,
            'rate' => $this->rate,
            'count_in_rate' => $this->count_in_rate,
            'status' => isset($this->status) ? $this->status : 0,
        ]);

        if ($this->image) {
            $thumbnail = $this->image;
            $filename = $thumbnail->hashName();
            Image::make($thumbnail)->resize(300, 300)->save(public_path('/images/packages/' . $filename));
            $package->image = $filename;
            $package->save();
        }
        if ($package) {
            $this->EditModelOpened = false;
            $this->resetInput();

            flash(trans('lang.updated_successfully'));

        }
    }

    public function show($id)
    {
        $package = Package::find($id);

        if ($package) {

            $this->getPackage($package);

        }

    }

    public function getPackage($package)
    {
        $this->package = $package;
        $this->name_ar = $this->package['name_ar'];
        $this->name_en = $this->package['name_en'];
        $this->rate = $this->package['rate'];

        $this->count_in_rate = $this->package['count_in_rate'];
        $this->price = $this->package['price'];
        $this->type = $this->package['type'];
        $this->duration = $this->package['duration'];
        $this->image = $this->package['image'];
        $this->image_path = $this->package['image_path'];

        $this->status = $this->package['status'];


        $this->created_at = isset($this->package['created_at']) ? Carbon::parse($this->package['created_at'])->format('Y-m-d') : '';
        $this->uid = $this->package['id'];

    }

    public function toggleShowModal($id)
    {
        $this->ShowModelOpened = !$this->ShowModelOpened;

        $package = Package::find($id);

        if ($package) {

            $this->getPackage($package);


        }

    }

    public function ShowModalClose()
    {
        $this->ShowModelOpened = false;

    }

    public function toggleEditModal($id)
    {

        $this->EditModelOpened = !$this->EditModelOpened;

        $package = Package::find($id);

        if ($package) {

            $this->getPackage($package);


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
        $this->price = '';
        $this->type = '';
        $this->duration = '';
        $this->status = '';
        $this->created_at = '';


    }

    public function destroy($id)
    {

        $package = Package::find($id);


        if ($package->image) {


            if (File::exists('images/packages/' . $package->image)) {

                unlink('images/packages/' . $package->image);
            }
        }
        if ($package) {
            $package->delete();

            flash(trans('lang.deleted_sucessfully'));

        }


    }
}
