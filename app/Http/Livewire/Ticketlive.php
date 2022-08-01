<?php

namespace App\Http\Livewire;

use App\Exports\TicketExport;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Ticket;
use Hash;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;

class Ticketlive extends Component
{
    use WithPagination,
        WithFileUploads;

    public $data, $subject, $content, $type, $tickets, $selected_id;
    public $updateMode = false;
    public $AddModelOpened = false;
    public $active;
    public $search;
    public $pos = [];
    protected $paginationTheme = 'bootstrap';


    public function render()
    {

        $this->data['tickets'] = Ticket::orderBy('id', 'DESC')->search(trim($this->subject))->simplePaginate(7);
        $this->data['total']=Ticket::count();
        return view('livewire.ticket.ticketlive');
    }

    private function resetInput()
    {
        $this->subject = '';
        $this->content = '';
        $this->type = '';
    }



    public function export()
    {
        return Excel::download(new TicketExport(), 'tickets.xlsx');
    }

    public function exportCsv()
    {
        return Excel::download(new TicketExport(), 'tickets.csv');

    }

    public function exportPdf()
    {

        return Excel::download(new TicketExport(), 'tickets.pdf');

    }

    public function save()
    {

        $this->validate([
            'subject' => 'required',
            'content' => 'required',
            'type' => 'required'
        ]);

        $tickets = Ticket::create([
            'subject' => $this->subject,
            'content' => $this->content,
            'type' => $this->type
        ]);

        $this->resetInput();
//        $this->emit('userStore');
        // session()->flash('message', 'Positions Created Successfully.');
        flash(trans('lang.added_successfully'));
        $this->AddModelOpened = false;
    }

    public function edit($id)
    {
        $record = Ticket::findOrFail($id);
        $this->selected_id = $id;
        $this->subject = $record->subject;
        $this->content = $record->content;
        $this->type = $record->type;
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
            'subject' => 'required',
            'content' => 'required',
            'type' => 'required'
        ]);

        if ($this->selected_id) {
            $record = Ticket::find($this->selected_id);
            $record->update([
                'subject' => $this->subject,
                'content' => $this->content,
                'type' => $this->type
            ]);

            $this->updateMode = false;
            flash(trans('lang.updated_successfully'));
            $this->emit('userStore');
        }

    }

    public function destroy($id)
    {
        if ($id) {
            $record = Ticket::where('id', $id);
            $record->delete();
            flash(trans('lang.deleted_sucessfully'));
        }
    }
}
