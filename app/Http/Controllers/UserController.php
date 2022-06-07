<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class UserController extends Controller{

    public function getRestos(){
        $restos = Restaurant::all();
        return response()->json([
            "status" => "Success",
            "restos" => $restos
        ], 200);
    }




}
