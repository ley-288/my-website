<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Socialite;
use Exception;
use Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

class FacebookController extends Controller
{
    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function loginWithFacebook()
    {
        try {

            $user = Socialite::driver('facebook')->user();
            $isUser = User::where('fb_id', $user->id)->first();

            if($isUser){
                Auth::login($isUser);
                return redirect('/');
            }else{
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'fb_id' => $user->id,
                    'password' => encrypt('admin@123')
                ]);

                /*
                TO DO SOCIAL LOGIN EMAIL
                $email = $user->email;
                $data = $user->name;
                Mail::to($email)->send(new WelcomeMail($data));
                */

                Auth::login($createUser);
                return redirect('/');
            }

        } catch (Exception $exception) {

            return redirect('/');
        }
    }
}
