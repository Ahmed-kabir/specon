<?php

use Illuminate\Support\Facades\Route;

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
Route::prefix('admin')->group(function(){
Route::group(['middleware'=>'auth:admin'],function(){
    Route::get('home', 'AdminController@index')->name('adminHome');
    Route::get('add/speaker', 'SpeakerController@addSpeaker')->name('addSpeaker');
    Route::post('save/speaker', 'SpeakerController@saveSpeaker')->name('saveSpeaker');
    Route::get('add/topic', 'TopicController@addTopic')->name('addTopic');
    Route::post('save/topic', 'TopicController@saveTopic')->name('saveTopic');
    Route::get('add/schedule', 'ScheduleController@addSchedule')->name('addSchedule');
    Route::post('save/schedule', 'ScheduleController@saveSchedule')->name('saveSchedule');
});
});

Route::group(['middleware'=>'guest:admin'],function(){
    Route::get('admin/login', 'admin\LoginController@showLoginForm')->name('login');
    Route::post('admin/login', 'admin\LoginController@login')->name('login');
});





Route::get('/home', 'HomeController@index')->name('home');


