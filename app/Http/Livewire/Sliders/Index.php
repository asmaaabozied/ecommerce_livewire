<?php

namespace App\Http\Livewire\Sliders;



use App\Exports\SlidersExport;
use App\Models\Slider;
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

    public $name_ar, $name_en, $description_en, $description_ar, $slider, $created_at, $uid, $image_path, $image;


    public function render()
    {

        $this->data['sliders'] = Slider::latest()->when($this->active, function ($query) {

            $query->where('status', $this->active);

        })->search(trim($this->name))->simplePaginate(7);
        $this->data['total'] = Slider::count();
        return view('livewire.sliders.index');
    }



    public function export()
    {
        return Excel::download(new SlidersExport(), 'sliders.xlsx');
    }

    public function exportCsv()
    {
        return Excel::download(new SlidersExport(), 'sliders.csv');

    }

    public function exportPdf()
    {
//        return (new UsersExport)->download('users.pdf', \Maatwebsite\Excel\Excel::MPDF);

        return Excel::download(new SlidersExport(), 'sliders.pdf');

    }

    public function save()
    {
        $this->validate([

            'name_ar' => 'required|string',
            'name_en' => 'required|string',
            'image' => 'required',


        ]);

        $slider = Slider::create([

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
            Image::make($thumbnail)->resize(300, 300)->save(public_path('/images/sliders/' . $filename));
            $slider->image = $filename;
            $slider->save();
        }


        if ($slider) {
            $this->resetInput();

            flash(trans('lang.added_successfully'));

            $this->AddModelOpened = false;

        }
        $this->emit('userStore');

    }

    public function edit($id)
    {

        $slider = Slider::find($id);

        if ($slider) {

            $this->getSlider($slider);

        }

    }

    public function update()
    {
        $this->validate([

            'name_ar' => 'required|string',
            'name_en' => 'required|string',


        ]);

        $slider = Slider::find($this->uid);

        $slider->update([

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
            Image::make($thumbnail)->resize(300, 300)->save(public_path('/images/sliders/' . $filename));
            $slider->image = $filename;
            $slider->save();
        }

        if ($slider) {
            $this->EditModelOpened = false;
            $this->resetInput();

            flash(trans('lang.updated_successfully'));

        }
    }

    public function show($id)
    {
        $slider = Slider::find($this->uid);

        if ($slider) {

            $this->getSlider($slider);

        }

    }

    public function getSlider($slider)
    {
        $this->slider = $slider;
        $this->name_ar = $this->slider['name_ar'];
        $this->name_en = $this->slider['name_en'];
        $this->description_en = $this->slider['description_en'];
        $this->description_ar = $this->slider['description_ar'];
        $this->status = $this->slider['status'];
        $this->image_path = $this->slider['image_path'];
        $this->image = $this->slider['image'];


        $this->created_at = isset($this->slider['created_at']) ? Carbon::parse($this->slider['created_at'])->format('Y-m-d') : '';
        $this->uid = $this->slider['id'];

    }

    public function toggleShowModal($id)
    {
        $this->ShowModelOpened = !$this->ShowModelOpened;

        $slider = Slider::find($id);

        if ($slider) {

            $this->getSlider($slider);


        }

    }

    public function ShowModalClose()
    {
        $this->ShowModelOpened = false;

    }

    public function toggleEditModal($id)
    {

        $this->EditModelOpened = !$this->EditModelOpened;

        $slider = Slider::find($id);

        if ($slider) {

            $this->getSlider($slider);


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

        $slider = Slider::find($id);

        if ($slider->image) {


            if (File::exists('images/sliders/' . $slider->image)) {

                unlink('images/sliders/' . $slider->image);
            }
        }
        if ($slider) {
            $slider->delete();

            flash(trans('lang.deleted_sucessfully'));

        }


    }
}
