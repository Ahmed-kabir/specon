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
//                       speaker section
    Route::get('add/speaker', 'SpeakerController@addSpeaker')->name('addSpeaker');
    Route::post('save/speaker', 'SpeakerController@saveSpeaker')->name('saveSpeaker');
    Route::get('manage/speaker', 'SpeakerController@manageSpeaker')->name('manageSpeaker');
    Route::get('edit/speaker/{id}', 'SpeakerController@editSpeaker')->name('editSpeaker');
    Route::post('update/speaker/{id}', 'SpeakerController@updateSpeaker')->name('updateSpeaker');
    Route::get('inactive/speaker/{id}', 'SpeakerController@inactiveSpeaker')->name('inactiveSpeaker');
//                      topic section
    Route::get('add/topic', 'TopicController@addTopic')->name('addTopic');
    Route::post('save/topic', 'TopicController@saveTopic')->name('saveTopic');
    Route::get('manage/topic', 'TopicController@manageTopic')->name('manageTopic');
    Route::get('edit/topic/{id}', 'TopicController@editTopic')->name('editTopic');
    Route::post('update/topic/{id}', 'TopicController@updateTopic')->name('updateTopic');
    Route::get('delete/topic/{id}', 'TopicController@deleteTopic')->name('deleteTopic');
//                      schedule section
    Route::get('add/schedule', 'ScheduleController@addSchedule')->name('addSchedule');
    Route::post('save/schedule', 'ScheduleController@saveSchedule')->name('saveSchedule');
    Route::get('manage/schedule', 'ScheduleController@manageSchedule')->name('manageSchedule');
    Route::get('edit/schedule/{id}', 'ScheduleController@editSchedule')->name('editSchedule');
    Route::post('update/schedule/{id}', 'ScheduleController@updateSchedule')->name('updateSchedule');
    Route::get('delete/schedule/{id}', 'ScheduleController@deleteSchedule')->name('deleteSchedule');

    Route::get('check/schedule', 'ScheduleController@checkSchedule')->name('checkSchedule');
//                      ticket section
    Route::get('add/ticket', 'TicketController@addTicket')->name('addTicket');
    Route::post('save/ticket', 'TicketController@saveTicket')->name('saveTicket');
    Route::get('manage/ticket', 'TicketController@manageTicket')->name('manageTicket');
    Route::get('edit/ticket/{id}', 'TicketController@editTicket')->name('editTicket');
    Route::post('update/ticket/{id}', 'TicketController@updateTicket')->name('updateTicket');
    Route::get('inactive/ticket/{id}', 'TicketController@inactiveTicket')->name('inactiveTicket');
//                      sponsor section
    Route::get('add/sponsor', 'SponsorController@addSponsor')->name('addSponsor');
    Route::post('save/sponsor', 'SponsorController@saveSponsor')->name('saveSponsor');
    Route::get('manage/sponsor', 'SponsorController@manageSponsor')->name('manageSponsor');
});
});

Route::group(['middleware'=>'guest:admin'],function(){
    Route::get('admin/login', 'admin\LoginController@showLoginForm')->name('login');
    Route::post('admin/login', 'admin\LoginController@login')->name('login');
});





Route::get('/home', 'HomeController@index')->name('home');


