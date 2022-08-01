<?php

namespace App\Http\Livewire\Perfumerequests;


use App\Exports\PerfumeRequestExport;
use App\Models\perfumerequest;
use Carbon\Carbon;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;

class Index extends Component
{

    public $AddModelOpened = false;
    public $EditModelOpened = false;
    public $ShowModelOpened = false;
    public $dates;
    public $active;
    public $name;

    public $status;
    public $data;
    protected $paginationTheme = 'bootstrap';

    public $req_name,$date, $quantity, $category, $cost, $stock, $perfumerequest, $page, $created_at, $uid;


    public function render()
    {

        $this->data['perfumerequests'] = perfumerequest::latest()->when($this->active, function ($query) {

            $query->where('status', $this->status);

        })->search(trim($this->req_name))->simplePaginate(7);
        $this->data['total'] = perfumerequest::count();
        return view('livewire.perfumerequests.index');
    }


    public function export()
    {
        return Excel::download(new PerfumeRequestExport(), 'perfumerequests.xlsx');
    }

    public function exportCsv()
    {
        return Excel::download(new PerfumeRequestExport(), 'perfumerequests.csv');

    }

    public function exportPdf()
    {

        return Excel::download(new PerfumeRequestExport(), 'perfumerequests.pdf');

    }


    public function save()
    {
        $this->validate([

            'req_name' => 'required',
            'quantity' => 'required',
            'category' => 'required',
            'cost' => 'required',
            'stock' => 'required',


        ]);

        $page = perfumerequest::create([
            'req_name' => $this->req_name,
            'quantity' => $this->quantity,
            'category' => $this->category,
            'cost' => $this->cost,
            'count_in_rate' => $this->count_in_rate,
            'stock' => $this->stock,
            'date' => $this->date,
            'status' => isset($this->status) ? $this->status : 0,
        ]);


        if ($page) {
            $this->resetInput();

            flash(trans('lang.added_successfully'));

            $this->AddModelOpened = false;

        }


    }

    public function edit($id)
    {

        $page = perfumerequest::find($id);

        if ($page) {

            $this->getPage($page);

        }

    }

    public function update()
    {
        $this->validate([

            'req_name' => 'required',
            'quantity' => 'required',
            'category' => 'required',
            'cost' => 'required',
            'stock' => 'required',


        ]);

        $page = perfumerequest::find($this->uid);

        $page->update([

            'req_name' => $this->req_name,
            'quantity' => $this->quantity,
            'category' => $this->category,
            'cost' => $this->cost,
            'count_in_rate' => $this->count_in_rate,
            'stock' => $this->stock,
            'date' => $this->date,
            'status' => isset($this->status) ? $this->status : 0,
        ]);


        if ($page) {
            $this->EditModelOpened = false;
            $this->resetInput();

            flash(trans('lang.updated_successfully'));

        }
    }

    public function show($id)
    {
        $page = perfumerequest::find($this->uid);

        if ($page) {

            $this->getPage($page);

        }

    }

    public function getPage($page)
    {
        $this->page = $page;
        $this->req_name = $this->page['req_name'];
        $this->quantity = $this->page['quantity'];
        $this->category = $this->page['category'];
        $this->cost = $this->page['cost'];
        $this->status = $this->page['status'];
        $this->stock = $this->page['stock'];
        $this->date = $this->page['date'];
        $this->count_in_rate = $this->page['count_in_rate'];

        $this->created_at = isset($this->page['created_at']) ? Carbon::parse($this->page['created_at'])->format('Y-m-d') : '';
        $this->uid = $this->page['id'];


    }

    public function toggleShowModal($id)
    {
        $this->ShowModelOpened = !$this->ShowModelOpened;

        $page = perfumerequest::find($id);

        if ($page) {

            $this->getPage($page);


        }

    }

    public function ShowModalClose()
    {
        $this->ShowModelOpened = false;

    }

    public function toggleEditModal($id)
    {

        $this->EditModelOpened = !$this->EditModelOpened;

        $page = perfumerequest::find($id);

        if ($page) {

            $this->getPage($page);


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

        $this->req_name = '';
        $this->quantity = '';
        $this->category = '';
        $this->cost = '';
        $this->status = '';
        $this->stock = '';
        $this->date = '';
        $this->count_in_rate = '';
        $this->status = '';
        $this->created_at = '';


    }

    public function destroy($id)
    {

        $page = perfumerequest::find($id);


        if ($page) {
            $page->delete();

            flash(trans('lang.deleted_sucessfully'));

        }


    }
}
