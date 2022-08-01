<?php

namespace App\Http\Livewire;
// use Intervention\Image\Facades\Image;
use App\Exports\PerfumeExport;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\Perfume;
use App\Models\Category;
use Hash;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;

class Perfumelive extends Component
{
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';

    public $data, $perfume_name_en,  $perfume_name_ar, $price, $category,$desc_en, $desc_ar, $sum , $stock, $quantity, $count_in_stock , $count_in_rate, $image, $discount, $date, $perfume ,$image_path , $selected_id ;
    public $updateMode = false;
    public $active;
    public $name;
    public $status;
    public $cats;
    public $count = 0;
 
    public function increment()
    {
        $count_in_rate = $this->count++;
    }

    public function render()
    {
        // $this->data['positions'] = Perfume::latest()->when($this->active, function ($query) {

        //     $query->where('status', $this->active);

        // })->search(trim($this->name))->simplePaginate(7);
        $this->data['perfumes'] = Perfume::latest()->search(trim($this->name))->simplePaginate(7);
        $this->data = Perfume::all();
        $this->cats = Category::all();
        // $sum = Perfume::count();
        return view('livewire.perfume.perfumelive');
    }


    public function export()
    {
        return Excel::download(new PerfumeExport(), 'perfume.xlsx');
    }

    public function exportCsv()
    {
        return Excel::download(new PerfumeExport(), 'perfume.csv');

    }

    public function exportPdf()
    {

        return Excel::download(new PerfumeExport(), 'perfume.pdf');

    }

    private function resetInput()
    {
        $this->perfume_name_en = '';
        $this->perfume_name_ar = '';
        $this->price = '';
        $this->discount = '';
        $this->category = '';
        $this->desc_en = '';
        $this->desc_ar = '';
        $this->quantity = '';
        $this->stock = '';
        $this->image = '';
        $this->status = '';
    }


    public function store()
    {
        $this->validate([
            'perfume_name_en' => 'required',
            'perfume_name_ar' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'category' => 'required',
            'desc_en' => 'required',
            'desc_ar' => 'required',
            'quantity' => 'required',
            'stock' => 'required',
            'image' => 'required|image|max:1024'
        ]);
        session()->flash('message', 'Perfumes Created Successfully.');

        $perfume = Perfume::create([
            'perfume_name_en' => $this->perfume_name_en,
            'perfume_name_ar' => $this->perfume_name_ar,
            'price' => $this->price,
            'discount' => $this->discount,
            'category' => $this->category,
            'desc_en' => $this->desc_en,
            'desc_ar' => $this->desc_ar,
            'quantity' => $this->quantity,
            'count_in_stock' => $this->quantity,
            'count_in_rate' => $this->count_in_rate,
            'stock' => $this->stock,
            'image' => $this->image,
            'status' => isset($this->status) ? $this->status : 0,
        ]);
        // if ($this->image) {
        //     $thumbnail = $this->image;
        //     $filename = $thumbnail->hashName();
        //     Image::make($thumbnail)->resize(300, 300)->save(public_path('/images/perfumes/' . $filename));
        //     $perfume->image = $filename;
        //     $perfume->store();
        // }
        $this->resetInput();
        $this->emit('userStore');
        flash(trans('lang.added_successfully'));
    }

    public function edit($id)
    {
        $record = Perfume::findOrFail($id);
        $this->selected_id = $id;
        $this->perfume_name_en = $record->perfume_name_en;
        $this->perfume_name_ar = $record->perfume_name_ar;
        $this->price = $record->price;
        $this->discount = $record->discount;
        $this->category = $record->category;
        $this->desc_en = $record->desc_en;
        $this->desc_ar = $record->desc_ar;
        $this->quantity = $record->quantity;
        $this->count_in_stock = $record->quantity;
        $this->stock = $record->stock;
        $this->image = $record->image;
        $this->status = $record->status;
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
            'perfume_name_en' => 'required',
            'perfume_name_ar' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'category' => 'required',
            'desc_en' => 'required',
            'desc_ar' => 'required',
            'quantity' => 'required',
            'stock' => 'required',
            'image' => 'required|image|max:1024'
        ]);

        if ($this->selected_id) {
            $record = Perfume::find($this->selected_id);
            $record->update([
                'perfume_name_en' => $this->perfume_name_en,
                'perfume_name_ar' => $this->perfume_name_ar,
                'price' => $this->price,
                'discount' => $this->discount,
                'category' => $this->category,
                'desc_en' => $this->desc_en,
                'desc_ar' => $this->desc_ar,
                'quantity' => $this->quantity,
                'count_in_stock' => $this->quantity,
                'stock' => $this->stock,
                'image' => $this->image,
                'status' => isset($this->status) ? $this->status : 0,
            ]);
            // if ($this->image) {
            //     $thumbnail = $this->image;
            //     $filename = $thumbnail->hashName();
            //     Image::make($thumbnail)->resize(300, 300)->save(public_path('/images/perfumes/' . $filename));
            //     $perfume->image = $filename;
            //     $perfume->store();
            // }

            $this->updateMode = false;
            flash(trans('lang.updated_successfully'));
            $this->emit('userStore');

        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Perfume::where('id', $id);
            $record->delete();
            flash(trans('lang.deleted_sucessfully'));
        }
    }
}
