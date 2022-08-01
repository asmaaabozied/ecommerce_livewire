<?php

namespace App\Http\Controllers\Api;

use App\Services\Payment;
use VMdevelopment\TapPayment\Facade\TapPayment;
use App\Models\Brand;
use App\Models\order_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{


    public function PaymentRequest(Request $request)
    {
//        dd($request->all());
//        $rule = [
//            'order_id' => 'required',
//
//        ];
//
//        $customMessages = [
//            'required' => __('validation.attributes.required'),
//        ];
//
//        $validator = validator()->make($request->all(), $rule, $customMessages);
//        if ($validator->fails()) {
//            if (str_contains(validationErrorsToString($validator->errors()), 'order_id')) {
//                return response()->json(['status' => 423, 'message' => validationErrorsToString($validator->errors())], 422);
//            }
//            return response()->json(['status' => 422, 'message' => validationErrorsToString($validator->errors())], 422);
//        }
//
//
        $order = order_detail::find($request->order_id);

        $secret_api_Key = 'sk_test_M19b6hykd83xCSaqF0HI7i4t';

        $TapPay = new Payment(['secret_api_Key' => $secret_api_Key]);

        $redirect = false; // return response as json , you can use it form mobile web view application

        $charge = $TapPay->charge([
            'amount' => $order->amount,
            'order_id'=>$order->id,
            'currency' => 'SAR',
            'threeDSecure' => 'true',
            'description' => 'test description',
            'statement_descriptor' => 'sample',
            'customer' => [
//                'first_name' => Auth::user()->first_name,
//                'email' => Auth::user()->email,

                'first_name' => 'asmaa',
                'email' => 'asmaa@test.com',
            ],
            'source' => [
                'id' => 'src_card'
            ],
            'post' => [
                'url' => null
            ],
            'redirect' => [
                'url' => route('check_payment',$request->all())
            ]
        ], $redirect);

        $charge_response_array = (array)$charge;

        $url=$charge_response_array["transaction"]->url;
        header("Location:".$url);
        die();
        return $url;
    }

    public function Pay(Request $request)
    {
//        $order=order_detail::find($request->order_id);
        $amount = 12;
        $orderid=$request->order_id;
        return view('cartform', compact('amount','orderid'));
    }


    public function check_payment(Request $request)
    {

        $secret_api_Key = 'sk_test_M19b6hykd83xCSaqF0HI7i4t';
        $TapPay = new Payment(['secret_api_Key'=> $secret_api_Key]);
        $Charge =  $TapPay->getCharge($request->tap_id);
//        dd($Charge=='CAPTURED');

        $order = order_detail::find($request->order_id);

        $order->update(['status' => $Charge->status]);

        $order->save();

        if ($Charge->status=='CAPTURED') {


            return response()->json(['status' =>1,'message'=> __(trans('lang.added_payment'))]);
        } else {
            return response()->json(['status' =>0,'message'=> __(trans('lang.failed_payment'))]);


        }

    }
}
