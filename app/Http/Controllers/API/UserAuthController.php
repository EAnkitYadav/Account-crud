<?php

namespace App\Http\Controllers\API;
use Illuminate\Routing\Controller as Controller;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Laravel\Passport\Passport;

use Illuminate\Http\Request;

class UserAuthController extends Controller
{

   public function register(Request $request)
   {
     $data = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|confirmed'
    ]);

        $data['password'] = bcrypt($request->password);
        $user = User::create($data);
         // $token = $user->createToken('API Token')->accessToken;
        return response([ 'user' => $user,200]);
    }

    public function login(Request $request)
        {
            $data = $request->validate([
                'email' => 'email|required',
                'password' => 'required'
            ]);

            if(!auth()->attempt($data)){
                return response(['error_message' =>'Incorrect Details']);
            }else{
               //$user = Auth::user();
                $token = auth()->user()->createToken('Myapp')->accessToken;

                return response(['user' => auth()->user(), 'token' => $token]);
            }
        }
         public function logout(Request $request)
         {
           $token = $request->user()->token();
           $token->revoke();

           return response(["message"=>"you have sucessfully Logout",200]);

        }


        }


