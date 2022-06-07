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


    public function logIn(Request $request){
        $email = $request->email;
        $password = hash('sha256', $request->password);

        $user = User::where('email', $email)->first();
        
        $user_id = $user->user_id;
        if($password == $user->user_password){
            return response()->json([
                "status" => true,
                "user_id" => $user_id
            ], 200);
        }
        else{
            return response()->json([
                "status" => false,
            ], 200);
        }
    }


 





}
