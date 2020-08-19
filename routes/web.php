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

Route::get('/', function () {

    //return view('welcome') -> with(['d1'=>'Samo','id'=> 30]);
    $data = [];
    $data['id'] = 30;
    $data['name'] = 'Ebtisam';
    $obj = new \stdClass();
    $obj -> id = 30;
    $obj -> name = "sam";
    $obj -> gender = "female";
    return view('welcome', compact('obj'));
});

Route::get('/test1', function () {
   return 'welcome';
});

//route parameters
//required parameter
Route::get('/test2/{id}', function ($id) {
    return $id;
});

//optional parameter
Route::get('/test3/{id?}', function () {
    return 'welcome';
});


//route name
Route::get('/show-number/{id}', function ($id) {
    return $id;
}) -> name('a');

//optional parameter
Route::get('/show-string/{id?}', function () {
    return 'welcome';
})  -> name('b');

Route::namespace('Front')->group(function(){

    //all route only access controller or methods in folder named Front
    Route::get('users', 'UserController@showUserName');
});

Route::group(['namespace' => 'admin'], function () {
    Route::get('second', 'SecondController@showString');
});

//using middleware
//Route::group(['middleware' => 'auth','namespace' => 'Front'], function () {
//    Route::get('users','UserController@index');
//});

//Route::get('users','Front\UserController@index')->middleware('auth');

Route::group(['namespace' => 'Front'],function (){

   Route::get('show1','UserController@showString1')->middleware('auth');
   Route::get('show2','UserController@showString2');
   Route::get('show3','UserController@showString3');
});

Route::get('login',function()
{
    return 'must be logged in ';
}) -> name('login');

Route::resource('news','NewsController');

Route::get('index','Front\UserController@getIndex');

Route::get('/landing',function()
{
   return view('landing');
});

Route::get('/about',function(){
    return view('about');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home') -> middleware('verified');

