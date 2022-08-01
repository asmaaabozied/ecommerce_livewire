<?php

namespace App\Http\Controllers\Api;

use App\Models\BankAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class BankAccountController extends Controller
{


    public function ListOfBankAccount()
    {
        $BankAccount = BankAccount::get();


        return response()->json(['status' => 1, 'data' => $BankAccount]);

    }

    public function AddBankAccount(Request $request)
    {
        $rule = [
            'email' => 'required|email',
            'first_name' => 'required',

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
        $bank = BankAccount::create([


            'email' => $request['email'],
            'first_name' => $request['first_name']

        ]);


        if ($request->hasFile('image')) {
            $picture_name = time() . str_shuffle('abcdef') . '.' . $request->file('image')->getClientOriginalExtension();
            Image::make($request->file('image'))->save(public_path("$picture_name"));
            $request->request->set('image', $picture_name);
            $bank->image = $picture_name;
            $bank->save();
        }

        return response()->json(['status' => 1, 'data' => $bank]);

    }

}
