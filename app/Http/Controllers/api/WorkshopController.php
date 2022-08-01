<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\GeneralTrait;
use Session;
use App\Models\workshop;

class WorkshopController extends Controller
{
    public function index()
    {
        $workshop = workshop::get();
        return response()->json($workshop);

        // return $this -> returnData('categories',$categories);
    }
    public function AddWorkshop(Request $request)
    {
        $rule = [
            'work_name' => 'required',
            'price' => 'required',
            'category' => 'required',
            'desc' => 'required',
            'stock' => 'required',
            'quantity' => 'required',
            'date' => 'required'
        ];

        $customMessages = [
            'required' => __('validation.attributes.required'),
        ];

        $validator = validator()->make($request->all(), $rule, $customMessages);
        if ($validator->fails()) {
            if (str_contains(validationErrorsToString($validator->errors()), 'workshop_id')) {
                return response()->json(['status' => 423, 'message' => validationErrorsToString($validator->errors())], 422);
            }
            return response()->json(['status' => 422, 'message' => validationErrorsToString($validator->errors())], 422);
        }
        $workshop = workshop::create([


            'work_name' => $request['work_name'],
            'price' => $request['price'],

            'desc' => $request['desc'],
            'category' => $request['category'],
            'stock' => $request['stock'],
            'quantity' => $request['quantity'],
            'date' => $request['date'],

        ]);


        return response()->json(['status' => 1, 'data' => $workshop]);

    }
}
