<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function getReviews(){
        $reviews = Review::all()->where('approved', 0);
        return response()->json([
            "success" => true,
            "reviews" => $reviews
        ], 200);
    }

    public function getUserReviews(Request $request){
        $reviews = Review::all()->where('users_user_id', $request->user_id);
        return response()->json([
            "success" => true,
            "reviews" => $reviews
        ], 200);
    }
    

    public function getRestoReviews(Request $request){
        $reviews = Review::all()->where('restaurants_restaurant_id', $request->restaurant_id);
        return response()->json([
            "success" => true,
            "reviews" => $reviews
        ], 200);
    }


}
