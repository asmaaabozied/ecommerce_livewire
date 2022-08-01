<?php

namespace App\Http\Controllers\Api;
use App\Models\banktransfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;


class BanktransferController extends Controller
{
    public function ListOfbanktransfer()
    {
        $banktransfer = banktransfer::get();


        return response()->json(['status' => 1, 'data' => $banktransfer]);

    }

    public function AddBanktransfer(Request $request)
    {
        $rule = [
            'email' => 'required|email',
            'name_en' => 'required',

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
        $banktransfer = banktransfer::create([


            'email' => $request['email'],
            'name_en' => $request['name_en'],
            'name_ar' => $request['name_ar']

        ]);


        if ($request->hasFile('image')) {
            $picture_name = time() . str_shuffle('abcdef') . '.' . $request->file('image')->getClientOriginalExtension();
            Image::make($request->file('image'))->save(public_path("$picture_name"));
            $request->request->set('image', $picture_name);
            $banktransfer->image = $picture_name;
            $banktransfer->save();
        }

        return response()->json(['status' => 1, 'data' => $banktransfer]);

    }
}
