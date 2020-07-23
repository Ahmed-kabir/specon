<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'WelcomeController@index')->name('index');
Route::get('/speaker', 'WelcomeController@speaker')->name('speaker');
Route::get('/schedule', 'WelcomeController@schedule')->name('Schedule');
Route::get('/contact', 'WelcomeController@contact')->name('Contact');
Route::get('/blog', 'WelcomeController@blog')->name('Blog');
Route::get('/ticket', 'WelcomeController@Ticket')->name('Ticket');
Route::get('/sponsor', 'WelcomeController@Sponsor')->name('Sponsor');
Route::post('save/sponsor', 'SponsorController@saveSponsor')->name('saveSponsor');
Route::get('buy/ticket/{id}', 'TicketController@buyTicket')->name('buyTicket');
Route::post('/schedule/test', 'ScheduleController@dateScheduletest')->name('dateSchedule');


Route::post('confirm/ticket/{id}', 'TicketController@confirmTicket')->name('confirmTicket');

Auth::routes();
Route::prefix('admin')->group(function(){
Route::group(['middleware'=>'auth:admin'],function(){
    Route::get('home', 'AdminController@index')->name('adminHome');
    Route::get('/logout', 'AdminController@logout')->name('Logout');
    Route::get('/settings', 'AdminController@manageSettings')->name('manageSettings');
    Route::post('/update/settings/{id}', 'AdminController@updateSettings')->name('updateSettings');
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

    Route::get('manage/sponsor', 'SponsorController@manageSponsor')->name('manageSponsor');
    Route::get('edit/sponsor/{id}', 'SponsorController@editSponsor')->name('editSponsor');
    Route::post('update/sponsor/{id}', 'SponsorController@updateSponsor')->name('updateSponsor');
    Route::get('inactive/sponsor/{id}', 'SponsorController@inactiveSponsor')->name('inactiveSponsor');
    Route::get('sponsor/request', 'SponsorController@sponsorRequest')->name('sponsorRequest');
    Route::get('activated/request/{id}', 'SponsorController@activatedSponsor')->name('activatedSponsor');
    Route::post('active/sponsor/{id}', 'SponsorController@activeSponsor')->name('activeSponsor');
    Route::post('test', 'SponsorController@test')->name('test');
//                      blog section
    Route::get('add/blog', 'BlogController@addBlog')->name('addBlog');
    Route::post('save/blog', 'BlogController@saveBlog')->name('saveBlog');
    Route::get('manage/blog', 'BlogController@manageBlog')->name('manageBlog');
    Route::get('edit/blog/{id}', 'BlogController@editBlog')->name('editBlog');
    Route::post('update/blog/{id}', 'BlogController@updateBlog')->name('updateBlog');
    Route::get('inactive/blog/{id}', 'BlogController@inactiveBlog')->name('inactiveBlog');
//                      section title
    Route::get('manage/banner', 'SectionController@manageBanner')->name('manageBanner');
    Route::POST('update/banner/{id}', 'SectionController@updateBanner')->name('updateBanner');
    Route::get('manage/about', 'SectionController@manageAbout')->name('manageAbout');
    Route::post('update/about/{id}', 'SectionController@updateAbout')->name('updateAbout');
    Route::get('manage/about/overview', 'SectionController@manageAboutOverview')->name('manageAboutOverview');
    Route::post('update/about/overview/{id}', 'SectionController@updateAboutOverview')->name('updateAboutOverview');
    Route::get('manage/benifit/', 'SectionController@manageBenifit')->name('manageBenifit');
    Route::post('update/benifit/{id}', 'SectionController@updateBenifit')->name('updateBenifit');
    Route::get('delete/benifit/{id}', 'SectionController@deleteBenifit')->name('deleteBenifit');
    Route::get('speaker/title', 'SectionController@speakerTitle')->name('speakerTitle');
    Route::post('update/speaker/title/{id}', 'SectionController@updateSpeakerTitle')->name('updateSpeakerTitle');
    Route::get('schedule/title/', 'SectionController@scheduleTitle')->name('scheduleTitle');
    Route::post('update/schedule/title/{id}', 'SectionController@updateScheduleTitle')->name('updateScheduleTitle');
    Route::get('callin/title', 'SectionController@callInTitle')->name('callInTitle');
    Route::post('update/callin/title/{id}', 'SectionController@updateCallinTitle')->name('updateCallinTitle');
    Route::get('ticket/title/', 'SectionController@ticketTitle')->name('ticketTitle');
    Route::post('update/ticket/title/{id}', 'SectionController@updateTicket1')->name('updateTicket1');
    Route::get('event/title/', 'SectionController@eventTitle')->name('eventTitle');
    Route::post('update/event/title/{id}', 'SectionController@updateEventTitle')->name('updateEventTitle');
    Route::get('blog1/title', 'SectionController@blog1Title')->name('blog1Title');
    Route::post('update/blog1/title/{id}', 'SectionController@updateBlogTitle1')->name('updateBlogTitle1');
    Route::get('sponsor1/title', 'SectionController@sponsor1Title')->name('sponsor1Title');
    Route::post('update/sponsor1/title/{id}', 'SectionController@updateSponsor1')->name('updateSponsor1');
    Route::get('mission/title/', 'SectionController@missionTitle')->name('missionTitle');
    Route::post('update/mission/title/{id}', 'SectionController@updateTitleMission')->name('updateTitleMission');
    Route::get('testimonial/title/', 'SectionController@testimonialTitle')->name('testimonialTitle');
    Route::post('update/title/testimonial/{id}', 'SectionController@updateTitleTestimonial')->name('updateTitleTestimonial');
});
});

Route::group(['middleware'=>'guest:admin'],function(){
    Route::get('admin/login', 'admin\LoginController@showLoginForm')->name('login');
    Route::post('admin/login', 'admin\LoginController@login')->name('login');
});


Route::get('/home', 'HomeController@index')->name('home');


