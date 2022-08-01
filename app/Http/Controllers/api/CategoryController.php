<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
class CategoryController extends Controller
{


    public function ListOfCategories()
    {
        $categories=Category::get();

        return response()->json(['status' => 1, 'data' => $categories]);

    }
}
