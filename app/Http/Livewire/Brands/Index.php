<?php

namespace App\Http\Livewire\Brands;



use App\Exports\BrandsExport;
use App\Models\Brand;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Livewire\Component;
use Livewire\WithFileUploads;
use Hash;
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

    public $name_ar, $name_en, $brand, $created_at, $uid, $image_path, $image;


    public function render()
    {

        $this->data['brands'] = Brand::latest()->when($this->active, function ($query) {

            $query->where('status', $this->active);

        })->search(trim($this->name))->simplePaginate(7);
        $this->data['total'] = Brand::count();
        return view('livewire.brands.index');
    }


    public function export()
    {
        return Excel::download(new BrandsExport(), 'brands.xlsx');
    }

    public function exportCsv()
    {
        return Excel::download(new BrandsExport(), 'brands.csv');

    }

    public function exportPdf()
    {

        return Excel::download(new BrandsExport(), 'brands.pdf');

    }

    public function save()
    {
        $this->validate([

            'name_ar' => 'required|string',
            'name_en' => 'required|string',
            'image' => 'required',


        ]);

        $brand = Brand::create([

            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,

            'status' => isset($this->status) ? $this->status : 0,
        ]);

        if ($this->image) {
            $thumbnail = $this->image;
//            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $filename = $thumbnail->hashName();
            Image::make($thumbnail)->resize(300, 300)->save(public_path('/images/brands/' . $filename));
            $brand->image = $filename;
            $brand->save();
        }


        if ($brand) {
            $this->resetInput();

            flash(trans('lang.added_successfully'));

            $this->AddModelOpened = false;

        }


    }

    public function edit($id)
    {

        $brand = Brand::find($id);

        if ($brand) {

            $this->getBrand($brand);

        }

    }

    public function update()
    {
        $this->validate([

            'name_ar' => 'required|string',
            'name_en' => 'required|string',


        ]);

        $brand = Brand::find($this->uid);

        $brand->update([

            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'status' => isset($this->status) ? $this->status : 0,
        ]);
        if ($this->image) {
            $thumbnail = $this->image;
//            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $filename = $thumbnail->hashName();
            Image::make($thumbnail)->resize(300, 300)->save(public_path('/images/brands/' . $filename));
            $brand->image = $filename;
            $brand->save();
        }

        if ($brand) {
            $this->EditModelOpened = false;
            $this->resetInput();

            flash(trans('lang.updated_successfully'));

        }
    }

    public function show($id)
    {
        $brand = Brand::find($this->uid);

        if ($brand) {

            $this->getBrand($brand);

        }

    }

    public function getBrand($brand)
    {
        $this->brand = $brand;
        $this->name_ar = $this->brand['name_ar'];
        $this->name_en = $this->brand['name_en'];
        $this->status = $this->brand['status'];
        $this->image_path = $this->brand['image_path'];
        $this->image = $this->brand['image'];


        $this->created_at = isset($this->brand['created_at']) ? Carbon::parse($this->brand['created_at'])->format('Y-m-d') : '';
        $this->uid = $this->brand['id'];

    }

    public function toggleShowModal($id)
    {
        $this->ShowModelOpened = !$this->ShowModelOpened;

        $brand = Brand::find($id);

        if ($brand) {

            $this->getBrand($brand);


        }

    }

    public function ShowModalClose()
    {
        $this->ShowModelOpened = false;

    }

    public function toggleEditModal($id)
    {

        $this->EditModelOpened = !$this->EditModelOpened;

        $brand = Brand::find($id);

        if ($brand) {

            $this->getBrand($brand);


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
        $this->image = '';


    }

    public function destroy($id)
    {

        $brand = Brand::find($id);

        if ($brand->image) {


            if (File::exists('images/brands/' . $brand->image)) {

                unlink('images/brands/' . $brand->image);
            }
        }
        if ($brand) {
            $brand->delete();

            flash(trans('lang.deleted_sucessfully'));

        }


    }
}
