<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function getReviews(){
        $review = Review::all()->where('approved', 0);
        return response()->json([
            "success" => true,
            "reviews" => $review
        ], 200);
    }
}
