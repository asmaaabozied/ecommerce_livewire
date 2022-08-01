<?php

namespace App\Http\Controllers\Api;



use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
class BrandController extends Controller
{


    public function ListOfBrands()
    {
        $brands=Brand::get();


        return response()->json(['status' => 1, 'data' => $brands]);

    }
}
