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
}
