<?php

namespace App\Http\Livewire;

use App\Exports\OrderDetailExport;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

use Livewire\Component;
use App\Models\order_detail;
use Hash;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;

class Orderdetaillive extends Component
{
    use WithPagination,
        WithFileUploads;

    public $data, $product, $total, $subtotal, $payment_method, $shipping, $paid, $batch_id, $amount, $status, $order_detail, $selected_id;
    public $updateMode = false;
    public $search;

    public function render()
    {
        $this->data = order_detail::all();

        $search = '%' . $this->search . '%';
        $query = order_detail::where('product', 'LIKE', $search)
            ->orderBy('id', 'DESC')->get();
        return view('livewire.OrderDetail.orderdetail', ['order_details' => $query]);
    }

    private function resetInput()
    {
        $this->product = '';
        $this->total = '';
        $this->subtotal = '';
        $this->payment_method = '';
        $this->shipping = '';
        $this->paid = '';
        $this->batch_id = '';
        $this->amount = '';
    }

    public function export()
    {
        return Excel::download(new OrderDetailExport(), 'OrderDetail.xlsx');
    }

    public function exportCsv()
    {
        return Excel::download(new OrderDetailExport(), 'OrderDetail.csv');

    }

    public function exportPdf()
    {

        return Excel::download(new OrderDetailExport(), 'OrderDetail.pdf');

    }

    public function store()
    {
        $this->validate([
            'product' => 'required',
            'total' => 'required',
            'subtotal' => 'required',
            'payment_method' => 'required',
            'shipping' => 'required',
            'paid' => 'required',
            'batch_id' => 'required',
            'amount' => 'required'
        ]);

        $order_detail = order_detail::create([
            'product' => $this->product,
            'total' => $this->total,
            'subtotal' => $this->subtotal,
            'payment_method' => $this->payment_method,
            'shipping' => $this->shipping,
            'paid' => $this->paid,
            'batch_id' => $this->batch_id,
            'amount' => $this->amount
        ]);

        $this->resetInput();
        $this->emit('userStore');
        // session()->flash('message', 'Positions Created Successfully.');
        flash(trans('lang.added_successfully'));
        $this->emit('userStore1');
    }

    public function edit($id)
    {
        $record = order_detail::findOrFail($id);
        $this->selected_id = $id;
        $this->product = $record->product;
        $this->total = $record->total;
        $this->subtotal = $record->subtotal;
        $this->payment_method = $record->payment_method;
        $this->shipping = $record->shipping;
        $this->paid = $record->paid;
        $this->batch_id = $record->batch_id;
        $this->amount = $record->amount;
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
            'product' => 'required',
            'total' => 'required',
            'subtotal' => 'required',
            'payment_method' => 'required',
            'shipping' => 'required',
            'paid' => 'required',
            'batch_id' => 'required',
            'amount' => 'required'
        ]);

        if ($this->selected_id) {
            $record = order_detail::find($this->selected_id);
            $record->update([
                'product' => $this->product,
                'total' => $this->total,
                'subtotal' => $this->subtotal,
                'payment_method' => $this->payment_method,
                'shipping' => $this->shipping,
                'paid' => $this->paid,
                'batch_id' => $this->batch_id,
                'amount' => $this->amount
            ]);

            $this->updateMode = false;
            flash(trans('lang.updated_successfully'));
            $this->emit('userStore');
        }

    }

    public function destroy($id)
    {
        if ($id) {
            $record = order_detail::where('id', $id);
            $record->delete();
            flash(trans('lang.deleted_sucessfully'));
        }
    }
}
