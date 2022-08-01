<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{

    public function AddRating(Request $request)
    {
        $rule = [
            'value' => 'required',

            'perfume_id' => 'required|exists:perfumes,id',
            'client_id' => 'required',

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


        $rating = Rating::updateOrCreate([

            'perfume_id' => $request->perfume_id,
            'client_id' => $request->client_id,

        ],

            [
                'value' => $request->value,
                'perfume_id' => $request->perfume_id,
                'client_id' => $request->client_id,
            ]
        );


        return response()->json(['status' => 1, 'message' => __('lang.added_successfully'), 'data' => $rating]);


    }

}
