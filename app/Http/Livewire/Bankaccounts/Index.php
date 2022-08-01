<?php

namespace App\Http\Livewire\Bankaccounts;


use App\Exports\ArticlesExport;

use App\Exports\BankAccountExport;
use App\Exports\EducationExport;
use App\Models\BankAccount;
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

    public $name_ar, $email, $first_name, $name_en, $type, $number, $iban, $bank, $created_at, $uid, $image_path, $image;


    public function render()
    {

        $this->data['bankaccounts'] = BankAccount::latest()->when($this->active, function ($query) {

            $query->where('status', $this->active);

        })->search(trim($this->name))->simplePaginate(7);
        $this->data['total'] = BankAccount::count();
        return view('livewire.bankaccounts.index');
    }


    public function export()
    {
        return Excel::download(new BankAccountExport(), 'bankaccounts.xlsx');
    }

    public function exportCsv()
    {
        return Excel::download(new BankAccountExport(), 'bankaccounts.csv');

    }

    public function exportPdf()
    {

        return Excel::download(new BankAccountExport(), 'bankaccounts.pdf');

    }

    public function save()
    {

        $this->validate([

            'name_ar' => 'required|string',
            'name_en' => 'required|string',
            'email' => 'required|email',
            'image' => 'required',


        ]);

        $bankaccount = BankAccount::create([

            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'number' => $this->number,
            'iban' => $this->iban,
            'first_name' => $this->first_name,
            'email' => $this->email,
            'status' => isset($this->status) ? $this->status : 0,
        ]);

        if ($this->image) {
            $thumbnail = $this->image;
//            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $filename = $thumbnail->hashName();
            Image::make($thumbnail)->resize(300, 300)->save(public_path('/images/bankaccounts/' . $filename));
            $bankaccount->image = $filename;
            $bankaccount->save();
        }


        if ($bankaccount) {
            $this->resetInput();

            flash(trans('lang.added_successfully'));

            $this->AddModelOpened = false;

        }


    }

    public function edit($id)
    {

        $bankaccount = BankAccount::find($id);

        if ($bankaccount) {

            $this->getBank($bankaccount);

        }

    }

    public function update()
    {
        $this->validate([

            'name_ar' => 'required|string',
            'name_en' => 'required|string',
            'email' => 'required|email',


        ]);

        $bankaccount = BankAccount::find($this->uid);

        $bankaccount->update([
            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'number' => $this->number,
            'iban' => $this->iban,
            'first_name' => $this->first_name,
            'email' => $this->email,
            'status' => isset($this->status) ? $this->status : 0,
        ]);
        if ($this->image) {
            $thumbnail = $this->image;
//            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $filename = $thumbnail->hashName();
            Image::make($thumbnail)->resize(300, 300)->save(public_path('/images/bankaccounts/' . $filename));
            $bankaccount->image = $filename;
            $bankaccount->save();
        }

        if ($bankaccount) {
            $this->EditModelOpened = false;
            $this->resetInput();

            flash(trans('lang.updated_successfully'));

        }
    }

    public function show($id)
    {
        $bankaccount = BankAccount::find($this->uid);

        if ($bankaccount) {

            $this->getBank($bankaccount);

        }

    }

    public function getBank($bank)
    {
        $this->bank = $bank;
        $this->name_ar = $this->bank['name_ar'];
        $this->number = $this->bank['number'];
        $this->name_en = $this->bank['name_en'];
        $this->iban = $this->bank['iban'];
        $this->first_name = $this->bank['first_name'];
        $this->email = $this->bank['email'];
        $this->status = $this->bank['status'];
        $this->image_path = $this->bank['image_path'];
        $this->image = $this->bank['image'];


        $this->created_at = isset($this->bank['created_at']) ? Carbon::parse($this->bank['created_at'])->format('Y-m-d') : '';
        $this->uid = $this->bank['id'];

    }


    public function toggleShowModal($id)
    {
        $this->ShowModelOpened = !$this->ShowModelOpened;

        $bankaccount = BankAccount::find($id);

        if ($bankaccount) {

            $this->getBank($bankaccount);


        }

    }

    public function ShowModalClose()
    {
        $this->ShowModelOpened = false;

    }

    public function toggleEditModal($id)
    {

        $this->EditModelOpened = !$this->EditModelOpened;

        $bankaccount = BankAccount::find($id);

        if ($bankaccount) {

            $this->getBank($bankaccount);


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
        $this->number = '';
        $this->name_en = '';
        $this->iban = '';
        $this->email = '';
        $this->first_name = '';
        $this->status = '';
        $this->created_at = '';
        $this->image = '';


    }

    public function destroy($id)
    {

        $bankaccount = BankAccount::find($id);

        if ($bankaccount->image) {


            if (File::exists('images/bankaccounts/' . $bankaccount->image)) {

                unlink('images/bankaccounts/' . $bankaccount->image);
            }
        }
        if ($bankaccount) {
            $bankaccount->delete();

            flash(trans('lang.deleted_sucessfully'));

        }


    }
}
