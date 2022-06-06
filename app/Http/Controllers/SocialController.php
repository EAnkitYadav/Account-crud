<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;


class SocialController extends Controller
{
    public function redirect($provider)
    {
     return Socialite::driver($provider)->redirect();
    }
    public function Callback($provider)
    {
        $userSocial =  Socialite::driver($provider)->user();
        $users  =  User::where(['email' => $userSocial->getEmail()])->first();
        if($users){
            Auth::login($users);
            return redirect('/home');
            }
            else
            {
            $user = User::create([
            'name'=> $userSocial->getName(),
            'email'=> $userSocial->getEmail(),
            'password' => encrypt('123456dummy'),
            'provider_id'=> $userSocial->getId(),
            'provider'=> $provider,


        ]);
         return redirect()->route('home');
        }
}

}
