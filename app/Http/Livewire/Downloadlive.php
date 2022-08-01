<?php

namespace App\Http\Livewire;

use App\Exports\DownloadExport;
use App\Models\Ticket;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Download;
use Hash;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;

class Downloadlive extends Component
{
    use WithPagination,
        WithFileUploads;

    public $data, $status, $total, $downloads, $selected_id;
    public $updateMode = false;
    public $active;
    public $search;
    public $pos = [];
    protected $paginationTheme = 'bootstrap';

    public function render()
    {

        $this->data['downloads'] = Download::orderBy('id', 'DESC')->search(trim($this->status))->simplePaginate(7);
        $this->data['total'] = Download::count();
        return view('livewire.download.downloadlive');
    }

    private function resetInput()
    {
        $this->status = '';
        $this->total = '';
    }


    public function export()
    {
        return Excel::download(new DownloadExport(), 'downloads.xlsx');
    }

    public function exportCsv()
    {
        return Excel::download(new DownloadExport(), 'downloads.csv');

    }

    public function exportPdf()
    {

        return Excel::download(new DownloadExport(), 'downloads.pdf');

    }

    public function store()
    {
        $this->validate([
            'status' => 'required',
            'total' => 'required',
        ]);

        $downloads = Download::create([
            'status' => $this->status,
            'total' => $this->total,
        ]);

        $this->resetInput();
        $this->emit('userStore');
        // session()->flash('message', 'Positions Created Successfully.');
        flash(trans('lang.added_successfully'));
        $this->emit('userStore1');
    }

    public function edit($id)
    {


        $record = Ticket::findOrFail($id);
//        $this->selected_id = $id;
        $this->status = $record->status;
        $this->total = $record->total;

    }


    public function toggleEditModal($id)
    {

        $this->updateMode == true;
        $record = Ticket::findOrFail($id);

//        $this->updateMode = !$this->updateMode;

        $record = Ticket::findOrFail($id);

        if ($record) {

            $this->status = $record->status;
            $this->total = $record->total;


        }
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        $this->validate([
            'status' => 'required',
            'total' => 'required',
        ]);

        if ($this->selected_id) {
            $record = Download::find($this->selected_id);
            $record->update([
                'status' => $this->status,
                'total' => $this->total,
            ]);

            $this->updateMode = false;
            flash(trans('lang.updated_successfully'));
            $this->emit('userStore');
        }

    }

    public function destroy($id)
    {
        if ($id) {
            $record = Download::where('id', $id);
            $record->delete();
            flash(trans('lang.deleted_sucessfully'));
        }
    }
}
