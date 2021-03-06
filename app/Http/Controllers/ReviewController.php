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


    public function addReview(Request $request){
        $review = new Review;
        $review->users_user_id = $request->user_id;
        $review->restaurants_restaurant_id = $request->restaurant_id;
        $review->rating = $request->rating;
        $review->review_text = $request->review_text;
        $review->approved = 0;
        $review->save();
       
        return response()->json([
            "success" => true,
        ], 200);
    }
    


    public function acceptReview(Request $request){
        Review::where('review_id',$request->review_id)->update(['approved'=>1]);
        
        return response()->json([
            "success" => true,
        ], 200);
    }


    public function declineReview(Request $request){
        Review::where('review_id',$request->review_id)->delete();
        
        return response()->json([
            "success" => true,
        ], 200);
    }

}
