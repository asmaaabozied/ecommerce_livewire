<?php

namespace App\Http\Livewire\Coupons;


use App\Exports\CoupanExport;
use App\Models\Category;
use App\Models\Country;
use App\Models\Coupon;
use App\Models\Perfume;
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

    public $code, $value, $country, $coupan, $start_date, $end_date, $number, $category_id, $product_id, $created_at, $uid;


    public function render()
    {

        $this->data['coupons'] = Coupon::latest()->when($this->active, function ($query) {

            $query->where('status', $this->active);

        })->search(trim($this->name))->simplePaginate(7);
        $this->data['total'] = Coupon::count();
        $this->data['categories'] = Category::get();
        $this->data['perfumes'] = Perfume::get();
        return view('livewire.coupons.index');
    }





    public function export()
    {
        return Excel::download(new CoupanExport(), 'coupans.xlsx');
    }

    public function exportCsv()
    {
        return Excel::download(new CoupanExport(), 'coupans.csv');

    }

    public function exportPdf()
    {
//        return (new UsersExport)->download('users.pdf', \Maatwebsite\Excel\Excel::MPDF);

        return Excel::download(new CoupanExport(), 'coupans.pdf');

    }



    public function save()
    {
        $this->validate([

            'name' => 'required|string',
            'code' => 'required',


        ]);

        $coupan = Coupon::create([

            'name' => $this->name,
            'code' => $this->code,
            'value' => $this->value,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'number' => $this->number,
            'category_id' => $this->category_id,
            'product_id' => $this->product_id,

            'status' => isset($this->status) ? $this->status : 0,
        ]);


        if ($coupan) {
            $this->resetInput();

            flash(trans('lang.added_successfully'));

            $this->AddModelOpened = false;

        }


    }

    public function edit($id)
    {

        $coupan = Coupon::find($id);

        if ($coupan) {

            $this->getCoupan($coupan);

        }

    }

    public function update()
    {
        $this->validate([

            'name' => 'required|string',
            'code' => 'required',


        ]);

        $coupan = Coupon::find($this->uid);

        $coupan->update([

            'name' => $this->name,
            'code' => $this->code,
            'value' => $this->value,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'number' => $this->number,
            'category_id' => $this->category_id,
            'product_id' => $this->product_id,

            'status' => isset($this->status) ? $this->status : 0,
        ]);


        if ($coupan) {
            $this->EditModelOpened = false;
            $this->resetInput();

            flash(trans('lang.updated_successfully'));

        }
    }

    public function show($id)
    {
        $coupan = Coupon::find($id);

        if ($coupan) {

            $this->getCoupan($coupan);

        }

    }

    public function getCoupan($coupan)
    {
        $this->coupan = $coupan;
        $this->name = $this->coupan['name'];
        $this->code = $this->coupan['code'];
        $this->start_date = $this->coupan['start_date'];
        $this->end_date = $this->coupan['end_date'];
        $this->number = $this->coupan['number'];
        $this->category_id = $this->coupan['category_id'];
        $this->product_id = $this->coupan['product_id'];


        $this->status = $this->coupan['status'];


        $this->created_at = isset($this->coupan['created_at']) ? Carbon::parse($this->coupan['created_at'])->format('Y-m-d') : '';
        $this->uid = $this->coupan['id'];

    }

    public function toggleShowModal($id)
    {
        $this->ShowModelOpened = !$this->ShowModelOpened;

        $coupan = Coupon::find($id);

        if ($coupan) {

            $this->getCoupan($coupan);


        }

    }

    public function ShowModalClose()
    {
        $this->ShowModelOpened = false;

    }

    public function toggleEditModal($id)
    {

        $this->EditModelOpened = !$this->EditModelOpened;

        $coupan = Coupon::find($id);

        if ($coupan) {

            $this->getCoupan($coupan);


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

        $this->name = '';
        $this->code = '';
        $this->value = '';
        $this->start_date = '';
        $this->category_id = '';
        $this->product_id = '';
        $this->number = '';
        $this->end_date = '';
        $this->status = '';
        $this->created_at = '';


    }

    public function destroy($id)
    {

        $coupan = Coupon::find($id);


        if ($coupan) {
            $coupan->delete();

            flash(trans('lang.deleted_sucessfully'));

        }


    }
}
