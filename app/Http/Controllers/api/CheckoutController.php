<?php

namespace App\Http\Controllers\Api;
use App\Models\checkout;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function ListOfCheckouts()
    {
        $checkouts=checkout::get();


        return response()->json(['status' => 1, 'data' => $checkouts]);

    }
    public function show($id)
    {
        return checkout::find($id);
    }
    public function store(Request $request)
    {
        return checkout::create($request->all());
    }
}
