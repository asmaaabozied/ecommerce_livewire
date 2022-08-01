<?php

namespace App\Http\Controllers\Api;
use App\Models\Newsletter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsletterController extends Controller
{
    public function ListOfNewsletter()
    {
        $Newsletter=Newsletter::get();


        return response()->json(['status' => 1, 'data' => $Newsletter]);

    }
    public function show($id)
    {
        return Newsletter::find($id);
    }
    public function store(Request $request)
    {
        // return cart::create($request->all());
        $rule = [
            'email' => 'required|email',
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
        $Newsletter = Newsletter::create([

            'email' => $request['email'],

        ]);


        return response()->json(['status' => 1, 'message' => __('lang.added_successfully'),'data' => $Newsletter]);

    }
}
