<?php

namespace App\Http\Controllers\Api;
use App\Models\Coupon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CouponController extends Controller
{
    public function ListOfCoupon()
    {
        $Coupon=Coupon::get();

        return response()->json(['status' => 1, 'data' => $Coupon]);

    }

    public function show($id)
    {
        return Coupon::find($id);
    }
    public function store(Request $request)
    {
        $rule = [
            'value' => 'required',
        ];

        $customMessages = [
            'required' => __('validation.attributes.required'),
        ];

        $validator = validator()->make($request->all(), $rule, $customMessages);
        if ($validator->fails()) {
            if (str_contains(validationErrorsToString($validator->errors()), 'perfume_id')) {
                return response()->json(['status' => 423, 'message' => validationErrorsToString($validator->errors())], 422);
            }
            return response()->json(['status' => 422, 'message' => validationErrorsToString($validator->errors())], 422);
        }
        $Coupon = Coupon::create([

            'value' => $request['value'],
            'start_date' => $request['start_date'],
            'end_date' => $request['end_date'],
            'number' => $request['number'],
            'name' => $request['name'],
            'code' => $request['code'],
            'type' => $request['type'],
            'times' => $request['times'],
            'category_id' => $request['category_id'],
            'product_id' => $request['product_id'],
            'status' => $request['status'],
        ]);


        return response()->json(['status' => 1, 'message' => __('lang.added_successfully'),'data' => $Coupon]);

    }
}
