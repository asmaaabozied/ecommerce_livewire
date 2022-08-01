<?php

namespace App\Http\Controllers\Api;


use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class EducationController extends Controller
{


    public function ListOfEducation()
    {
        $educations = Education::get();


        return response()->json(['status' => 1, 'data' => $educations]);

    }
}
