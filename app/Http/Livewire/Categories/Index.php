<?php

namespace App\Http\Livewire\Categories;

use App\Exports\CategoriesExport;
use App\Models\Category;
use App\Models\Perfume;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithPagination;
use Intervention\Image\Facades\Image;
use Livewire\WithFileUploads;
use Hash;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;

class Index extends Component
{
    use WithPagination,
        WithFileUploads;

    public $AddModelOpened = false;
    public $EditModelOpened = false;
    public $ShowModelOpened = false;
    public $dates;
    public $active;
    public $name;
    public $perfumesCount , $catscount;

    public $status;
    public $data;
    protected $paginationTheme = 'bootstrap';



    public $image, $name_ar, $name_en, $description_en, $description_ar, $category, $created_at, $image_path, $u_id;

    protected $listeners = ['getCategory' => 'getCategory', 'getDataNull' => 'getDataNull'];

    public function mount(Category $id)
    {
        $this->catscount = Category::all();
        $this->perfumesCount = Perfume::where('category_id', '=', $id)->count();
    }

    public function render()
    {


        $this->data['categories'] = Category::latest()->when($this->active, function ($query) {

            $query->where('status', $this->active);

        })->search(trim($this->name))->simplePaginate(7);
        $this->data['total'] = Category::count();
        $this->catscount = Category::all();
        return view('livewire.categories.index');

    }


    public function export()
    {
        return Excel::download(new CategoriesExport(), 'categories.xlsx');
    }

    public function exportCsv()
    {
        return Excel::download(new CategoriesExport, 'categories.csv');

    }

    public function exportPdf()
    {
//        return (new UsersExport)->download('users.pdf', \Maatwebsite\Excel\Excel::MPDF);

        return Excel::download(new CategoriesExport, 'categories.pdf');

    }

    public function save()
    {
        $this->validate([

            'name_ar' => 'required|string',
            'name_en' => 'required|string',

      //            'image' => 'required',

        ]);


        $category = Category::create([

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
            Image::make($thumbnail)->resize(300, 300)->save(public_path('/images/categories/' . $filename));
            $category->image = $filename;
            $category->save();
        }

        if ($category) {
            $this->emit('getDataNull');

            flash(trans('lang.added_successfully'));

            $this->AddModelOpened = false;

        }
        $this->emit('userStore');


    }

    public function toggleShowModal($id)
    {
        $this->ShowModelOpened = !$this->ShowModelOpened;

        $category = Category::find($id);

        if ($category) {

            $this->emit('getCategory', $category);


        }

    }

    public function ShowModalClose()
    {
        $this->ShowModelOpened = false;

    }

    public function toggleAddModal()
    {

        $this->AddModelOpened = !$this->AddModelOpened;
        $this->emit('getDataNull');

    }

    public function toggleEditModal($id)
    {

        $this->EditModelOpened = !$this->EditModelOpened;

        $category = Category::find($id);

        if ($category) {

            $this->emit('getCategory', $category);


        }
    }

    public function toggleEditCloseModal()
    {
        $this->EditModelOpened = false;

    }


    public function edit($id)
    {

        $category = Category::find($id);

        if ($category) {

            $this->emit('getCategory', $category);

        }

    }

    public function show($id)
    {
        $category = Category::find($id);

        if ($category) {

            $this->emit('getCategory', $category);

        }

    }


    public function update()
    {


        $this->validate([

            'name_ar' => 'required|string',
            'name_en' => 'required|string',

//            'image' => 'required',

        ]);

        $category = Category::find($this->u_id);

        $category->update([

            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'description_ar' => $this->description_ar,
            'description_en' => $this->description_en,
            'status' => isset($this->status) ? $this->status : 0,
        ]);

        if ($this->image) {
            $thumbnail = $this->image;
            $filename = $thumbnail->hashName();
            Image::make($thumbnail)->resize(300, 300)->save(public_path('/images/categories/' . $filename));
            $category->image = $filename;
            $category->save();
        }

        if ($category) {
            $this->EditModelOpened = false;
            $this->emit('getDataNull');

            flash(trans('lang.updated_successfully'));

        }
    }

    public function destroy($id)
    {

        $category = Category::find($id);

        if ($category->image) {


            if (File::exists('images/categories/' . $category->image)) {

                unlink('images/categories/' . $category->image);
            }
        }
        if ($category) {
            $category->delete();

            flash(trans('lang.deleted_sucessfully'));

        }


    }

    public function getCategory($category)
    {
        $this->category = $category;
        $this->name_ar = $this->category['name_ar'];
        $this->name_en = $this->category['name_en'];
        $this->description_en = $this->category['description_en'];
        $this->description_ar = $this->category['description_ar'];
        $this->status = $this->category['status'];

        $this->created_at =  isset($this->category['created_at']) ? Carbon::parse($this->category['created_at'])->format('Y-m-d') :'';
        $this->image = $this->category['image'];
        $this->u_id = $this->category['id'];
        $this->image_path = $this->category['image_path'];

    }

    public function getDataNull()
    {

        $this->name_ar = null;
        $this->name_en = null;
        $this->description_en = null;
        $this->description_ar = null;
        $this->status = null;
        $this->created_at = null;
        $this->image = null;

    }


}
