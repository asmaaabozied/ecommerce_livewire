<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\last_offer;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;

class LastOfferController extends Controller
{
    public function index()
    {
        $last_offer = last_offer::get();
        return response()->json($last_offer);

        // return $this -> returnData('categories',$categories);
    }
}
