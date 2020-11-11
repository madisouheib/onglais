<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/geteachers', 'UsersController@data_teachers');
Route::get('/getlearners', 'UsersController@data_learners');


Route::get('/getlang', 'UsersController@data_lang');

Route::get('/getcountry', 'UsersController@data_country');

Route::get('/getfiltreusers/{id}', 'UsersController@data_filtre_users_lang');
Route::get('/getfiltreteachers/{id}', 'UsersController@data_filtre_teachers_lang');

Route::get('/getuser/{id}', 'UsersController@show_user');
Route::get('/getmail/{email}', 'UsersController@show_user_email');




Route::get('/getcountrylearners/{country}/', 'UsersController@data_filtre_learner_country');


Route::get('/getcountryteachers/{country}/', 'UsersController@data_filtre_teacher_country');

Route::get('/getlevelgroups/{id}', 'LevelsController@list_levels');

Route::get('/getuserslevellist/{id}', 'LevelsController@list_users_level');

Route::delete('/deleteusertest/{id}','LevelsController@delete_users_level');
  
Route::get('/showtestuser/{id}','LevelsController@show_user_level');

Route::patch('/closetest','LevelsController@close_level');
Route::patch('/updatepass','UsersController@update_pass_user');



  
Route::get('/resultest/{userid}/remind/{idtest}','LevelsController@resutl_show');
//level list show list 
Route::get('/getlevelslist','LevelsController@list_lev_users');

Route::patch('/putlevel','LevelsController@update_level');

Route::patch('/updateabsent','LevelsController@update_level_absent');
Route::post('/adduserunit','LevelsController@add_user_level');


Route::get('/getmeeting/{id}/session/{idses}','LevelsController@show_meeting');
Route::get('/showtestusertest/{id}','LevelsController@user_show_add');

//Start sessions routes -------------------------------------------------



Route::post('/addsession','SessionsController@add_session');
Route::get('/getsessions/{id}','SessionsController@session_data');

Route::get('/getparticipants/{id}','SessionsController@list_participants_session');
Route::post('/reservesession', 'SessionsController@add_session_reservation');

Route::post('/adduserses', 'SessionsController@add_session_user');


Route::delete('/delsession/{id}','SessionsController@delete_session');

Route::delete('/delreserv/{id}','SessionsController@delete_session_user');


//End sessions routes -------------------------------------------------


Route::get('/tester/{id}','LevelsController@get_status');
Route::delete('/deletebatch/{id}','LevelsController@delete_batch');

Route::get('/getester/{id}', 'LevelsController@data_lang_tester');

Route::get('/getinfobook/{idtest}', 'LevelsController@infos_book');

Route::post('/addunit', 'LevelsController@add_unit');

Route::post('/reservtest', 'LevelsController@add_reservation');


