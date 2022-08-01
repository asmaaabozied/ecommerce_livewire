<?php

namespace App\Http\Controllers\Api;
use App\Models\seller;
use App\Models\perfume;
use App\Models\review_rating;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SellerController extends Controller
{
    public function ListOfSellers()
    {
        $sellers=seller::get();
        // $sellers=seller::join('perfumes' , 'perfumes.seller_id' , '=' , 'sellers.id')
        //              ->join('review_ratings' , 'review_ratings.perfume_id' , '=' , 'perfumes.id')
        //              ->get(['sellers.id' , 'sellers.name_en' , 'sellers.address' , 'sellers.status' ,
        //               'perfumes.perfume_name_en' , 'perfumes.price' , 'perfumes.rate', 'review_ratings.name' ,'review_ratings.comments']);

        return response()->json(['status' => 1, 'data' => $sellers]);

    }

    public function bySeller(seller $seller)
    {
        return seller::with('perfumeData')
                 ->where('id' , $seller->id)->get();
    }


    public function show($id)
    {
        return seller::find($id);
    }
}
