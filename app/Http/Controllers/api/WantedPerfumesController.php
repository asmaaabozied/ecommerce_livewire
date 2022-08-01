<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\more_wanted_perfumes;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;

class WantedPerfumesController extends Controller
{
    public function index()
    {
        $wanted_perfumes = more_wanted_perfumes::get();
        return response()->json($wanted_perfumes);

        // return $this -> returnData('categories',$categories);
    }
}
