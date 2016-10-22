<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Socialite;
use GuzzleHttp\Client;

class FacebookAuthController extends Controller
{
    
    public function redirect()
    {
        $providerInstance = Socialite::driver('facebook');
        $providerInstance->setHttpClient(
            new Client([
                'curl' => [
                    CURLOPT_CAINFO => base_path('resources/assets/cacert.pem')
                ]
            ])
        );

        $scopes = [
            'email',
            'user_friends',
            'public_profile',
            'user_education_history',
            'user_hometown',
            'user_location',
            'user_work_history',
            'user_actions.books',
            'user_actions.music',
        ];
//        $scopes = [
//            'email',
//            'user_friends',
//            'public_profile'
//        ];
        return Socialite::driver('facebook')->scopes($scopes)->redirect();
    }

    public function callback()
    {
        $scopes = [
            'email',
            'user_friends',
            'public_profile',
            'user_education_history',
            'user_hometown',
            'user_location',
            'user_work_history',
            'user_actions.books',
            'user_actions.music',
        ];
        $fields = [
            'name', 'email', 'gender', 'verified', 'first_name', 'last_name', 'education', 'hometown', 'location',
            'work', 'books.reads', 'music.listens'
        ];
        $providerInstance = Socialite::driver('facebook');
        $providerInstance->setHttpClient(
            new Client([
                'curl' => [
                    CURLOPT_CAINFO => base_path('resources/assets/cacert.pem')
                ]
            ])
        );
        $providerUser = Socialite::driver('facebook')->fields($fields)->user();
        return json_encode($providerUser);
    }
}
