<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\account_detail;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountDetailController extends Controller
{

    public function index()
    {
        $account_detail = account_detail::get();
        return response()->json($account_detail);
    }

    public function store(Request $request){
        // return account_detail::create($request->all());
        $rule = [
            
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'account_email' => 'required|email',
            'current_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required',
            'offer_name' => 'required',
            'address' => 'required',
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
        $account_detail = account_detail::create([


            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],

            'account_email' => $request['account_email'],
            'current_password' => $request['current_password'],
            'new_password' => $request['new_password'],
            'confirm_password' => $request['confirm_password'],
            'offer_name' => $request['offer_name'],
            'address' => $request['address'],

        ]);


        return response()->json(['status' => 1, 'message' => __('lang.added_successfully'),'data' => $account_detail]);
    }

    public function edit($id)
    {
        $record = account_detail::findOrFail($id);
        $this->selected_id = $id;
        $this->account_email = $record->account_email;
        $this->acc_password = $record->acc_password;
        $this->first_name = $record->first_name;
        $this->last_name = $record->last_name;
        $this->address = $record->address;
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
            'account_email' => 'required',
            'acc_password' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            ]);

        if ($this->selected_id) {
            $record = account_detail::find($this->selected_id);
            $record->update([
                'account_email' => $this->account_email,
                'acc_password' => $this->acc_password,
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'address' => $this->address,
            ]);
            
            $this->updateMode = false;
            flash(trans('lang.updated_successfully'));
            $this->emit('userStore');

        }
    }
}
