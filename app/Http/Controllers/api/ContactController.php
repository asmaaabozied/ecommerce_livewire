<?php

namespace App\Http\Controllers\Api;
use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function ListOfContact()
    {
        $Contact=Contact::get();

        return response()->json(['status' => 1, 'data' => $Contact]);

    }

    public function show($id)
    {
        return Contact::find($id);
    }
    public function store(Request $request)
    {
        // return cart::create($request->all());
        $rule = [
            'name' => 'required',
            'email' => 'required',
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
        $Contact = Contact::create([

            'name' => $request['name'],
            'email' => $request['email'],
            'image' => $request['image'],
            'link' => $request['link'],
        ]);


        return response()->json(['status' => 1, 'message' => __('lang.added_successfully'),'data' => $Contact]);

    }
}
