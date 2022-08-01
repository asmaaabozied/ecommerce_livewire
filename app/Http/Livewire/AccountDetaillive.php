<?php

namespace App\Http\Livewire;

use App\Exports\AccountDetailsExport;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

use Livewire\Component;
use App\Models\account_detail;
use Hash;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;

class AccountDetaillive extends Component
{

    use WithPagination,
        WithFileUploads;

    public $data, $account_email, $acc_password, $first_name, $last_name, $address, $account_detail, $selected_id;
    public $updateMode = false;
    public $active;
    public $search;

    public function render()
    {
        $this->data = account_detail::all();

        $search = '%' . $this->search . '%';
        $query = account_detail::where('first_name', 'LIKE', $search)
            ->orderBy('id', 'DESC')->get();
        return view('livewire.AccountDetail.accountdetail', ['account_details' => $query]);
    }

    public function export()
    {
        return Excel::download(new AccountDetailsExport(), 'AccountDetail.xlsx');
    }

    public function exportCsv()
    {
        return Excel::download(new AccountDetailsExport(), 'AccountDetail.csv');

    }

    public function exportPdf()
    {

        return Excel::download(new AccountDetailsExport(), 'AccountDetail.pdf');

    }


    private function resetInput()
    {
        $this->account_email = '';
        $this->acc_password = '';
        $this->first_name = '';
        $this->last_name = '';
        $this->address = '';
    }


    public function store()
    {
        $this->validate([
            'account_email' => 'required',
            'acc_password' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required'
        ]);

        $account_detail = account_detail::create([
            'account_email' => $this->account_email,
            'acc_password' => $this->acc_password,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'address' => $this->address
        ]);

        $this->resetInput();
        $this->emit('userStore');
        // session()->flash('message', 'Positions Created Successfully.');
        flash(trans('lang.added_successfully'));
        $this->emit('userStore1');
    }

    public function edit($id)
    {
        $record = account_detail::findOrFail($id);
        $this->selected_id = $id;
        $this->account_email = $record->account_email;
        $this->acc_password = $record->acc_password;
        $this->first_name = $record->first_name;
        $this->last_name = $record->last_name;
        $this->address = $record->address;
        $this->updateMode = true;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        $this->validate([
            'account_email' => 'required',
            'acc_password' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required'
        ]);

        if ($this->selected_id) {
            $record = account_detail::find($this->selected_id);
            $record->update([
                'account_email' => $this->account_email,
                'acc_password' => $this->acc_password,
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'address' => $this->address
            ]);

            $this->updateMode = false;
            flash(trans('lang.updated_successfully'));
            $this->emit('userStore');
        }

    }

    public function destroy($id)
    {
        if ($id) {
            $record = account_detail::where('id', $id);
            $record->delete();
            flash(trans('lang.deleted_sucessfully'));
        }
    }

}
