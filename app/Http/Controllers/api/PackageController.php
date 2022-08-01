<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\package;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        $package = package::get();
        return response()->json($package);

        // return $this -> returnData('categories',$categories);
    }
}
