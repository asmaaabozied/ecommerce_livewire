<?php

namespace App\Http\Livewire\Pages;

use App\Exports\PagesExport;
use App\Http\Requests\PageRequest;
use App\Models\Page;
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

    public $name_ar, $name_en, $description_en, $description_ar,$type , $page, $created_at, $uid;


    public function render()
    {

        $this->data['pages'] = Page::latest()->when($this->active, function ($query) {

            $query->where('status', $this->active);

        })->search(trim($this->name))->simplePaginate(7);
        $this->data['total'] = Page::count();
        return view('livewire.pages.index');
    }


    public function export()
    {
        return Excel::download(new PagesExport(), 'pages.xlsx');
    }

    public function exportCsv()
    {
        return Excel::download(new PagesExport(), 'pages.csv');

    }

    public function exportPdf()
    {

        return Excel::download(new PagesExport(), 'pages.pdf');

    }


    public function save()
    {
        $this->validate([

            'name_ar' => 'required|string',
            'name_en' => 'required|string',


        ]);

        $page = Page::create([

            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'type' => $this->type,
            'description_ar' => $this->description_ar,
            'description_en' => $this->description_en,
            'status' => isset($this->status) ? $this->status : 0,
        ]);


        if ($page) {
            $this->resetInput();

            flash(trans('lang.added_successfully'));

            $this->AddModelOpened = false;

        }
        $this->emit('userStore');


    }

    public function edit($id)
    {

        $page = Page::find($id);

        if ($page) {

            $this->getPage($page);

        }

    }

    public function update()
    {
        $this->validate([

            'name_ar' => 'required|string',
            'name_en' => 'required|string',


        ]);

        $page = Page::find($this->uid);

        $page->update([

            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'type' => $this->type,
            'description_ar' => $this->description_ar,
            'description_en' => $this->description_en,
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
        $page = Page::find($this->uid);

        if ($page) {

            $this->getPage($page);

        }

    }

    public function getPage($page)
    {
        $this->page = $page;
        $this->name_ar = $this->page['name_ar'];
        $this->name_en = $this->page['name_en'];
        $this->description_en = $this->page['description_en'];
        $this->description_ar = $this->page['description_ar'];
        $this->status = $this->page['status'];
        $this->type = $this->page['type'];

        $this->created_at = isset($this->page['created_at']) ? Carbon::parse($this->page['created_at'])->format('Y-m-d') : '';
        $this->uid = $this->page['id'];

    }

    public function toggleShowModal($id)
    {
        $this->ShowModelOpened = !$this->ShowModelOpened;

        $page = Page::find($id);

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

        $page = Page::find($id);

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

        $this->name_ar = '';
        $this->name_en = '';
        $this->description_en = '';
        $this->description_ar = '';
        $this->status = '';
        $this->created_at = '';
        $this->type = '';

    }

    public function destroy($id)
    {

        $page = Page::find($id);


        if ($page) {
            $page->delete();

            flash(trans('lang.deleted_sucessfully'));

        }


    }
}
