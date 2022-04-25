<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/terms-and-conditions', function(){
	            return view('privacyAndPolicy');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/start_exam', 'HomeController@start_exam')->name('start_exam');
Route::get('/start-now', 'HomeController@start_now')->name('start_now');
Route::get('/profile', 'HomeController@profile')->name('profile');


Route::get('/start', 'HomeController@survey')->name('survey');
Route::get('/result', 'HomeController@goToResult')->name('result');
Route::get('/detailed_scores', 'HomeController@detailed_scores')->name('detailed_scores');
Route::get('/futurePlan/{FuturePlanData?}', 'HomeController@futurePlan')->name('futurePlan');
Route::post('/sendQ', 'HomeController@InsertingQ')->name('sendQ');
Route::post('/addPlan', 'FuturePlanController@addPlan')->name('addPlan');
Route::post('/update_profile', 'ProfileController@UpdateProfile')->name('UpdateProfile');
Route::get('/Update_Profile_Page', 'ProfileController@Update_Profile_Page')->name('Update_Profile_Page');
Route::get('/ResetPasswordRedirect', 'HomeController@ResetPasswordRedirect')->name('ResetPasswordRedirect');

//Route::get('verifyEmailFirst','Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');
//Route::get('verify/{email}/{verifyToken}','Auth\RegisterController@sendEmailDone')->name('sendEmailDone');