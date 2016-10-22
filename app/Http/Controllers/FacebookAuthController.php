<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Educations;
use App\Hometowns;
use App\Locations;
use App\Profiles;
use App\Works;

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
            'user_actions.music'
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
            'work', 'books.reads', 'music.listens', 'age_range'
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
        $profileId = !empty($providerUser->id) ? $providerUser->id : '10154730815304456';
        $age = !empty($providerUser->user['age_range']['min']) ? $providerUser->user['age_range']['min'] : 0;
        $email = !empty($providerUser->email) ? $providerUser->email : '';
        $educations = array();
        $hometown = null;
        $location = null;
        $gender = isset($providerUser->user['gender']) ? $providerUser->user['gender'] : 'male';
        /*
         * $profiles->profile_id = $profile->id;
            $profiles->profile_gender = $profile->gender;
            $profiles->profile_email = $profile->email;
            $profiles->profile_age_range = $profile->age;
         */
        if(!empty($profileId)) {
            $profileData = array(
                'id' => $profileId,
                'gender' => $gender,
                'email' => $email,
                'age' => $age
            );
            Profiles::existsOrCreate($profileData);
        }
        $works = array();
        $educationsRaw = !empty($providerUser->user['education']) ? $providerUser->user['education'] : array();
        foreach($educationsRaw as $education) {
            if(!empty($education['school'])) {
//                array_push($educations, $education['school']);
                Educations::existsOrCreate($education['school']);
            }
        }
        if(!empty($providerUser->user['hometown'])) {
            Hometowns::existsOrCreate($providerUser->user['hometown']);
        }
        if(!empty($providerUser->user['location'])) {
            Locations::existsOrCreate($providerUser->user['location']);
        }
        $hometown = !empty($providerUser->user['hometown']) ? $providerUser->user['hometown'] : null;
        $location = !empty($providerUser->user['location']) ? $providerUser->user['location'] : null;
        $worksRaw = !empty($providerUser->user['work']) ? $providerUser->user['work'] : array();
        foreach($worksRaw as $work) {
            if(!empty($work['employer'])) {
                Works::existsOrCreate($work['employer']);
//                array_push($works, $work['employer']);
            }
        }
        $finalData = array(
            'educations' => $educations,
            'hometown' => $hometown,
            'location' => $location,
            'gender' => $gender,
            'works' => $works
        );

        return json_encode($finalData);
    }
}
