<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\feedback;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedback=feedback::get();


        return response()->json(['status' => 1, 'data' => $feedback]);
    }
}
