<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\User;

class UserController extends Controller{

    public function getUsers(){
        $users = User::all();
        return response()->json([
            "status" => "Success",
            "users" => $users
        ], 200);
    }

    public function getUserById(Request $request){
        $user_id = $request->user_id;
        echo $user_id;
        $user = User::find($user_id);
       
        return response()->json([
            "status" => "Success",
            "user" => $user
        ], 200);
    }

}
