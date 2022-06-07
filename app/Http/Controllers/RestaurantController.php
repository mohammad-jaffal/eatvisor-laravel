<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    public function getRestaurants(){
        $restaurant = Restaurant::all();
        return response()->json([
            "success" => true,
            "restaurant" => $restaurant
        ], 200);
    }


    public function getRestoById(Request $request){
        $restaurant_id = $request->restaurant_id;
        $restaurant = Restaurant::find($restaurant_id);
       
        return response()->json([
            "success" => true,
            "restaurant" => $restaurant
        ], 200);
    }





}
