<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function register(Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->account_type = "user";
        $user->password = Hash::make($request->input('password'));
        $user->save();
        return response()->json($user);
    }

    function login(Request $request)
    {
        $user = User::where('email', $request->input('email'))->first();
        
        if($user != null){
            if(Hash::check($request->password, $user->password))
            {
                return response()->json($user);
            }
        }
        
        return response()->json("Invalid Credentials");
    }
}
