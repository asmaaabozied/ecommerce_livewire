<?php

namespace App\Http\Controllers\Api;

use App\Models\PartnerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
class PartnerRequestController extends Controller
{

    public function AddPartneRequest(Request $request)
    {
        $rule = [
            'full_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|min:11',
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
        $partner = PartnerRequest::create([


            'full_name' => $request['full_name'],
            'email' => $request['email'],

            'age' => $request['age'],
            'phone' => $request['phone'],
            'money' => $request['money'],
            'experience' => $request['experience'],
            'city_id' => $request['city_id'],

        ]);


        return response()->json(['status' => 1, 'message' => __('lang.added_successfully'),'data' => $partner]);

    }


}
