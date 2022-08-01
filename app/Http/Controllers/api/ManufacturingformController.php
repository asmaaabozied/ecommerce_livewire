<?php

namespace App\Http\Controllers\Api;
use App\Models\manufacturingform;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManufacturingformController extends Controller
{
    public function ListOfmanufacturingform()
    {
        $manufacturingform=manufacturingform::get();


        return response()->json(['status' => 1, 'data' => $manufacturingform]);

    }
    public function show($id)
    {
        return manufacturingform::find($id);
    }
    public function store(Request $request)
    {
        // return cart::create($request->all());
        $rule = [
            'email' => 'required|email',
            'address' => 'required',
            'name' => 'required',
            'required_number' => 'required',
            'share_capital' => 'required',
            'phone' => 'required',
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
        $manufacturingform = manufacturingform::create([

            'email' => $request['email'],
            'address' => $request['address'],
            'name' => $request['name'],
            'required_number' => $request['required_number'],
            'share_capital' => $request['share_capital'],
            'phone' => $request['phone'],

        ]);


        return response()->json(['status' => 1, 'message' => __('lang.added_successfully'),'data' => $manufacturingform]);

    }
}
