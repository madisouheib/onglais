<?php











use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/teacher', 'TacherController@register_tech')->name('register_tech');
Route::get('/learner', 'LearnersController@register_learner')->name('register_learner');


Route::post('/registerr', 'Auth\RegisterTeacherController@register');

Route::get('addrole', 'HomeController@add_role')->name('add_role');

Route::get('/assrole', 'Auth\RegisterController@role')->name('role');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::post('/admin/profile/', 'AdminController@update_profile')->name('profile.update_profile')->middleware('auth'); 
Route::get('/admin/home', 'AdminController@index')->name('index')->middleware('auth');

Route::get('/admin/teachers', 'UsersController@teachers')->name('teachers')->middleware('auth');
Route::get('/admin/learners', 'UsersController@learners')->name('learners')->middleware('auth');

Route::get('admin/soon', 'AdminController@soon')->name('soon')->middleware('auth');


Route::get('admin/profile', 'UsersController@show_profile')->name('show_profile')->middleware('auth');


Route::get('/admin/listlevels/{id}', 'LevelsController@list_levels_reserve')->name('list_levels_reserve')->middleware('auth');


Route::get('/admin/sessions', 'SessionsController@index')->name('index')->middleware('auth');

Route::get('/admin/myses', 'SessionsController@show_card_session')->name('show_card_session')->middleware('auth');

Route::get('/admin/listparticipants/{id}', 'SessionsController@list_paticipants')->name('list_paticipants')->middleware('auth');

Route::get('/admin/levels', 'LevelsController@index')->name('index')->middleware('auth');

Route::get('/admin/teaching', 'SessionsController@teacher_session')->name('teacher_session')->middleware('auth');
