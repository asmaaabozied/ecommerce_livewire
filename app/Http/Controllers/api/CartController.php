<?php

namespace App\Http\Controllers\Api;
use App\Models\cart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function ListOfCarts()
    {
        $carts=cart::get();


        return response()->json(['status' => 1, 'data' => $carts]);

    }
    public function show($id)
    {
        return cart::find($id);
    }
    public function store(Request $request)
    {
        // return cart::create($request->all());
        $rule = [
            'product_name_ar' => 'required|string',
            'product_name_en' => 'required|string',
            'price' => 'required',
            'quantity' => 'required',
            'total' => 'required',
            'subtotal' => 'required',
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
        $cart = cart::create([


            'product_name_ar' => $request['product_name_ar'],
            'product_name_en' => $request['product_name_en'],

            'price' => $request['price'],
            'quantity' => $request['quantity'],
            'total' => $request['total'],
            'subtotal' => $request['subtotal'],
            'image' => $request['image'],
            'copoun' => $request['copoun'],

        ]);


        return response()->json(['status' => 1, 'message' => __('lang.added_successfully'),'data' => $cart]);

    }
}
