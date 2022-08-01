<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\order_detail;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    public $data, $product, $total, $subtotal ,$payment_method, $shipping , $paid, $batch_id, $amount, $status, $selected_id ;
    public $updateMode = false;


    public function index()
    {
        $order_detail = order_detail::get();
        return response()->json($order_detail);
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

    public function store(Request $request){
            $address = new order_detail();
            $address->product = $request->product;
            $address->total  = $request->total;
            $address->subtotal = $request->subtotal;
            $address->payment_method = $request->payment_method;
            $address->shipping  = $request->shipping;
            $address->paid = $request->paid;
            $address->batch_id = $request->batch_id;
            $address->amount = $request->amount;
            $address->save();
            flash(trans('lang.added_successfully'));
            // return redirect()->route('post.list');
    
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
            'amount' => 'required',
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
                'amount' => $this->amount,
            ]);
            
            $this->updateMode = false;
            flash(trans('lang.updated_successfully'));
            $this->emit('userStore');

        }
    }
}
