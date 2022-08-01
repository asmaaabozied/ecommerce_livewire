<?php

namespace App\Http\Controllers\Api;
use App\Models\Download;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DownloadController extends Controller
{
    public function ListOfDownloads()
    {
        $downloads=Download::get();


        return response()->json(['status' => 1, 'data' => $downloads]);

    }

    public function show($id)
    {
        return Download::find($id);
    }
    public function store(Request $request)
    {
        // return cart::create($request->all());
        $rule = [
            'total' => 'required',
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
        $Download = Download::create([

            'status' => $request['status'],
            'total' => $request['total'],
        ]);


        return response()->json(['status' => 1, 'message' => __('lang.added_successfully'),'data' => $Download]);

    }
}
