<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    public function authRedirect(){

        return Socialite::driver('google')->redirect();
    }

    public function authCallback(Request  $request){
        try {
            $googleUser  = Socialite::driver('google')->user();
            
            $user = User::updateOrCreate([
                'google_id' => $googleUser->id,
            ], [
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'google_token' => $googleUser->token,
                'google_refresh_token' => $googleUser->refreshToken,
            ]);

            Auth::login($user);

            return redirect('/dashboard');
        } catch (\Exception $e) {
            \Log::error('Google auth error: ' . $e->getMessage());
            return redirect('/login')->with('error', 'Authentication failed. Please try again.');
        }
    }
}
