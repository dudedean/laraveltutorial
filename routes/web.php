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

Route::get('/','PagesController@index');

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('blade','PagesController@blade')->middleware('authenticated');
// Route::get('users','UsersController@index')->middleware('authenticated');
Route::get('users/create','UsersController@create');
Route::post('users','UsersController@store');



// Route::get('users',function(){
//     $users = [
//         '0' => [
//             'first_name' => 'Renato',
//             'last_name' => 'Hysa',
//             'location' => 'Albania'        
//         ],
//         '1' => [
//             'first_name' => 'Jessica',
//             'last_name' => 'Alba',
//             'location' => 'USA'
//         ]
        
//         ];

//         return $users;
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['authenticated','auth'],function(){
    Route::get('blade','PagesController@blade');
    Route::get('users','UsersController@index');
});