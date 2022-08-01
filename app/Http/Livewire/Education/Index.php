<?php

namespace App\Http\Livewire\Education;


use App\Exports\ArticlesExport;

use App\Exports\EducationExport;
use App\Models\Education;
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

    public $name_ar, $name_en,$type, $description_en, $description_ar, $Education, $created_at, $uid, $image_path, $image;


    public function render()
    {

        $this->data['education'] = Education::latest()->when($this->active, function ($query) {

            $query->where('status', $this->active);

        })->search(trim($this->name))->simplePaginate(7);
        $this->data['total'] = Education::count();
        return view('livewire.education.index');
    }


    public function export()
    {
        return Excel::download(new EducationExport(), 'education.xlsx');
    }

    public function exportCsv()
    {
        return Excel::download(new EducationExport(), 'education.csv');

    }

    public function exportPdf()
    {
//        return (new UsersExport)->download('users.pdf', \Maatwebsite\Excel\Excel::MPDF);

        return Excel::download(new EducationExport(), 'education.pdf');

    }

    public function save()
    {
        $this->validate([

            'name_ar' => 'required|string',
            'name_en' => 'required|string',
            'image' => 'required',


        ]);

        $Education = Education::create([

            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'type' => $this->type,
            'description_ar' => $this->description_ar,
            'description_en' => $this->description_en,
            'status' => isset($this->status) ? $this->status : 0,
        ]);

        if ($this->image) {
            $thumbnail = $this->image;
//            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $filename = $thumbnail->hashName();
            Image::make($thumbnail)->resize(300, 300)->save(public_path('/images/education/' . $filename));
            $Education->image = $filename;
            $Education->save();
        }


        if ($Education) {
            $this->resetInput();

            flash(trans('lang.added_successfully'));

            $this->AddModelOpened = false;

        }


    }

    public function edit($id)
    {

        $Education = Education::find($id);

        if ($Education) {

            $this->getEducation($Education);

        }

    }

    public function update()
    {
        $this->validate([

            'name_ar' => 'required|string',
            'name_en' => 'required|string',


        ]);

        $Education = Education::find($this->uid);

        $Education->update([

            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'type' => $this->type,

            'description_ar' => $this->description_ar,
            'description_en' => $this->description_en,
            'status' => isset($this->status) ? $this->status : 0,
        ]);
        if ($this->image) {
            $thumbnail = $this->image;
//            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $filename = $thumbnail->hashName();
            Image::make($thumbnail)->resize(300, 300)->save(public_path('/images/education/' . $filename));
            $Education->image = $filename;
            $Education->save();
        }

        if ($Education) {
            $this->EditModelOpened = false;
            $this->resetInput();

            flash(trans('lang.updated_successfully'));

        }
    }

    public function show($id)
    {
        $Education = Education::find($this->uid);

        if ($Education) {

            $this->getEducation($Education);

        }

    }

    public function getEducation($Education)
    {
        $this->Education = $Education;
        $this->name_ar = $this->Education['name_ar'];
        $this->type = $this->Education['type'];
        $this->name_en = $this->Education['name_en'];
        $this->description_en = $this->Education['description_en'];
        $this->description_ar = $this->Education['description_ar'];
        $this->status = $this->Education['status'];
        $this->image_path = $this->Education['image_path'];
        $this->image = $this->Education['image'];


        $this->created_at = isset($this->Education['created_at']) ? Carbon::parse($this->Education['created_at'])->format('Y-m-d') : '';
        $this->uid = $this->Education['id'];

    }

    public function toggleShowModal($id)
    {
        $this->ShowModelOpened = !$this->ShowModelOpened;

        $Education = Education::find($id);

        if ($Education) {

            $this->getEducation($Education);


        }

    }

    public function ShowModalClose()
    {
        $this->ShowModelOpened = false;

    }

    public function toggleEditModal($id)
    {

        $this->EditModelOpened = !$this->EditModelOpened;

        $Education = Education::find($id);

        if ($Education) {

            $this->getEducation($Education);


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
        $this->type = '';
        $this->name_en = '';
        $this->description_en = '';
        $this->description_ar = '';
        $this->status = '';
        $this->created_at = '';
        $this->image = '';


    }

    public function destroy($id)
    {

        $Education = Education::find($id);

        if ($Education->image) {


            if (File::exists('images/education/' . $Education->image)) {

                unlink('images/education/' . $Education->image);
            }
        }
        if ($Education) {
            $Education->delete();

            flash(trans('lang.deleted_sucessfully'));

        }


    }
}
