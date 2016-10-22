<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('oauth','HackController@OAuth');
Route::get('db-check','HackController@DBCheck');

Route::get('/facebookRedirect', 'FacebookAuthController@redirect');
Route::get('/facebookCallback', 'FacebookAuthController@callback');

Route::get('/login', 'HackController@login');
Route::get('/habit', 'HackController@habit');
Route::get('/preference', 'HackController@preference');
Route::get('/social', 'HackController@social');
Route::get('/success', 'HackController@success');
Route::get('/travelstyle', 'HackController@travelStyle');

//// USThing paths and API
//Route::get('usthing/', 'USThingController@handleIndex');
//Route::get('usthing/{itsc}', 'USThingController@handleIndex');
//Route::get('usthing/api/loadDashboard','USThingController@returnDashboardData');
//Route::get('usthing/api/loadQuestions', 'USThingController@loadQuestionAjax');
//
////User routes
//Route::get('userProfile/{id}', 'UserProfileController@getUserProfile');
//Route::get('editUserProfile', 'UserProfileController@viewEditProfile');
//Route::post('editUserProfile2', 'UserProfileController@handleEditProfile');
//Route::get('api/getAllCountries', 'CountryController@getAllAvailableCountries');
//Route::get('api/getAllEducations', 'EducationController@getAllAvailableEducations');
//Route::get('api/getAllIndustries', 'IndustryController@getAllAvailableIndustries');
//Route::get('api/getAllOrganizations', 'OrganizationController@getAllAvailableOrganizations');
//
//
////Questions api
//Route::get('unansweredQuestions/{user_id}', 'QuestionController@getUnansweredQuestions');
//Route::get('answeredQuestions/{user_id}', 'QuestionController@getAnsweredQuestions');
//Route::get('askedQuestions/{user_id}', 'QuestionController@getAskedQuestions');
//Route::post('newQuestion', 'DiscussionController@handleAskQuestion');
//Route::post('newAnswer', 'DiscussionController@handleAnswer');
//Route::post('questionUpvote', 'DiscussionController@handleQuestionUpvote');