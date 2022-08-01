<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
class UserController extends Controller
{


    public function ToggleFavouriteProduct(Request $request)
    {
        $rule = [
            'perfume_id' => 'required|exists:perfumes,id',
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
        $user_id = Auth::id();
        $users = auth()->user();
//        $users=User::first();
        $user = $users->perfumes()->toggle($request->perfume_id);


        return response()->json(['status' => 1, 'data' => $user]);

    }


    /*----------------------------------------------------
    || Name     : show product favourite                  |
    || Tested   : Done                                    |
    || parameter:                                         |
    || Info     : type                                    |
    -----------------------------------------------------*/
    public function ShowFavouriteProduct()
    {
        $user_id = Auth::id();
        $users = User::find($user_id);
//        $users=User::first();
        $products = $users->perfumes;


        return response()->json(['status' => 1, 'data' => $products]);

    }
}
