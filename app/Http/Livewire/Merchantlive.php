<?php

namespace App\Http\Livewire;

use App\Exports\MerchantExport;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\merchant;
use App\Models\Category;
use Hash;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;

class Merchantlive extends Component
{
    use  WithFileUploads;

    public $data, $merchant_email, $m_password, $packages, $merchant_name, $image, $image_path, $quantity, $discount, $price, $pay, $date, $selected_id;
    public $updateMode = false;
    public $cats;
    public $status;
    public $name;
    public $active;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {

        $this->data['merchants'] = merchant::latest()->when($this->active, function ($query) {

            $query->where('status', $this->active);

        })->search(trim($this->name))->simplePaginate(7);
        $this->data['total'] = merchant::count();        $this->cats = Category::all();
        return view('livewire.Merchantlive.merchantlive');
    }


    public function export()
    {
        return Excel::download(new MerchantExport(), 'Merchantlive.xlsx');
    }

    public function exportCsv()
    {
        return Excel::download(new MerchantExport(), 'Merchantlive.csv');

    }

    public function exportPdf()
    {

        return Excel::download(new MerchantExport(), 'Merchantlive.pdf');

    }

    private function resetInput()
    {
        $this->merchant_email = '';
        $this->m_password = '';
        $this->merchant_name = '';
        $this->packages = '';
        $this->image = '';
        $this->status = '';

    }


    public function store()
    {
        $this->validate([
            'merchant_email' => 'required|email',
            'm_password' => 'required',
            'merchant_name' => 'required',
            'packages' => 'required',
            'image' => 'required|image|max:1024'
        ]);

        $this->m_password = Hash::make($this->m_password);

        $merchant = merchant::create([
            'merchant_email' => $this->merchant_email,
            'm_password' => $this->m_password,
            'merchant_name' => $this->merchant_name,
            'packages' => $this->packages,
            'image' => $this->image,
            'status' => isset($this->status) ? $this->status : 0,
        ]);
        // if ($this->image) {
        //     $thumbnail = $this->image;
        //     $filename = $thumbnail->hashName();
        //     Image::make($thumbnail)->resize(300, 300)->save(public_path('/images/merchants/' . $filename));
        //     $merchant->image = $filename;
        //     $merchant->store();
        // }
        $this->resetInput();
        $this->emit('userStore');
        flash(trans('lang.added_successfully'));
    }

    public function edit($id)
    {
        $record = merchant::findOrFail($id);
        $this->selected_id = $id;
        $this->merchant_email = $record->merchant_email;
        $this->m_password = $record->m_password;
        $this->merchant_name = $record->merchant_name;
        $this->packages = $record->packages;
        $this->image = $record->image;
        $this->status = $record->status;
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
            'merchant_email' => 'required|email',
            'm_password' => 'required',
            'merchant_name' => 'required',
            'packages' => 'required',
            'image' => 'image|max:1024'
        ]);

        if ($this->selected_id) {
            $record = merchant::find($this->selected_id);
            $record->update([
                'merchant_email' => $this->merchant_email,
                'm_password' => $this->m_password,
                'merchant_name' => $this->merchant_name,
                'packages' => $this->packages,
                'image' => $this->image,
                'status' => isset($this->status) ? $this->status : 0,
            ]);
            // if ($this->image) {
            //     $thumbnail = $this->image;
            //     $filename = $thumbnail->hashName();
            //     Image::make($thumbnail)->resize(300, 300)->save(public_path('/images/merchants/' . $filename));
            //     $merchant->image = $filename;
            //     $merchant->store();
            // }
            $this->updateMode = false;
            $this->emit('userStore');
            flash(trans('lang.updated_successfully'));
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = merchant::where('id', $id);
            $record->delete();
            flash(trans('lang.deleted_sucessfully'));
        }
    }
}
