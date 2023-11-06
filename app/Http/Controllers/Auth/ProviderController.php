<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class ProviderController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        $SocialUser = Socialite::driver('github')->user();
 
        $user = User::updateOrCreate([
            'provider_id' => $SocialUser->id,
            'provider' => $provider
        ], [
            'name' => $SocialUser->name,
            'email' => $SocialUser->email,
            'provider_token' => $SocialUser->token,
        ]);
     
        Auth::login($user);
     
        return redirect('/dashboard');
    }
}
