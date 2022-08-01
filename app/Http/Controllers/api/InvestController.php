<?php

namespace App\Http\Controllers\Api;
use App\Models\invest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvestController extends Controller
{
    public function ListOfInvests()
    {
        $invests=invest::get();


        return response()->json(['status' => 1, 'data' => $invests]);

    }
    public function show($id)
    {
        return invest::find($id);
    }
    public function store(Request $request)
    {
        $rule = [
            'name_ar' => 'required|string',
            'name_en' => 'required|string',
            'email' => 'required',
            'city' => 'required',
            'age' => 'required',
            'phone' => 'required',
            'capital' => 'required',
            'experience' => 'required',
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
        $invest = invest::create([


            'name_ar' => $request['name_ar'],
            'name_en' => $request['name_en'],

            'email' => $request['email'],
            'city' => $request['city'],
            'age' => $request['age'],
            'phone' => $request['phone'],
            'capital' => $request['capital'],
            'experience' => $request['experience'],

        ]);


        return response()->json(['status' => 1, 'message' => __('lang.added_successfully'),'data' => $invest]);

    }
}
