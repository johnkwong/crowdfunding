<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', ['as' => 'home' , 'uses' => 'HomeController@index']);
Route::get('search',['as' => 'search','uses'=>'ProjectController@search']);

//Route::get('/', 'WelcomeController@index');

Route::get('home',['as'=>'home', 'uses' => 'HomeController@index']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//User
Route::get('user/profile/{id}/edit', [ 'as' => 'user.profile.edit', 'uses' => 'UserController@editProfile']);
Route::patch('user/profile/update/{id}',[ 'as' => 'user.profile.update', 'uses' => 'UserController@updateProfile']) ;

Route::get('user/account/{id}/edit', [ 'as' => 'user.account.edit', 'uses'=> 'UserController@editAccount']);
Route::patch('user/account/update/{id}', [ 'as' => 'user.account.update', 'uses' => 'UserController@updateAccount']);

Route::get('facebook', [ 'as' => 'facebook', 'uses' => 'UserController@facebook_redirect']);
Route::get('user/facebook', 'UserController@facebook');

Route::get('user/follow_project/{id}', ['as' => 'followproject.index' , 'uses' => 'FollowProjectController@index']);
Route::get('user/starter_project/{id}', ['as' => 'starter.index' , 'uses' => 'StarterController@index']);
Route::get('user/sponsor/{id}', ['as' => 'sponsor.index' , 'uses' => 'SponsorController@index']);
Route::get('user/sponsor_record/{id}', ['as' => 'payment.index' , 'uses' => 'PaymentController@index']);


//project
Route::get('project/{class}/{sort}', ['as' => 'project.index' , 'uses' => 'ProjectController@index']);
Route::get('project/create/{id}/{step}', ['as' => 'project.create' , 'uses' => 'ProjectController@create']);
//Route::post('project/store', ['as' => 'project.store' , 'uses' => 'ProjectController@store']);
Route::get('projects/{id}/{step}', ['as' => 'project.show' , 'uses' => 'ProjectController@show']);
Route::get('projects/{id}', ['as' => 'project.tempshow' , 'uses' => 'ProjectController@showr']);
Route::get('project/edit/{id}/{step}', ['as' => 'project.edit' , 'uses' => 'ProjectController@edit']);
Route::post('project/update', ['as' => 'project.update' , 'uses' => 'ProjectController@update']);
//Route::get('project/destroy/{id}', ['as' => 'project.destroy' , 'uses' => 'ProjectController@destroy']);
Route::patch('project/{id}'       , ['as' => 'project.update' , 'uses' => 'ProjectController@update']);

Route::get('projectstatus/update/{id}', ['as' => 'projectstatus.update' , 'uses' => 'ProjectController@projectstatus']);

//project report
//Route::get('projectreport/create/{id}/{step}', ['as' => 'projectreport.create' , 'uses' => 'ProjectReportController@create']);
Route::post('projectreport/store', ['as' => 'projectreport.store' , 'uses' => 'ProjectReportController@store']);
//Route::get('projectreport/{id}/{step}', ['as' => 'projectreport.show' , 'uses' => 'ProjectReportController@show']);
//Route::get('projectreport/edit/{id}', ['as' => 'projectreport.edit' , 'uses' => 'ProjectReportController@edit']);
//Route::post('projectreport/update', ['as' => 'projectreport.update' , 'uses' => 'ProjectReportController@update']);
Route::get('projectreport/destroy/report/{id}', ['as' => 'projectreport.destroy' , 'uses' => 'ProjectReportController@destroy']);
//Route::patch('projectreport/{id}'       , ['as' => 'projectreport.update' , 'uses' => 'ProjectReportController@update']);

//project rewward
Route::get('projectreward/create/{id}/{step}', ['as' => 'projectreward.create' , 'uses' => 'ProjectRewardController@create']);
Route::post('projectreward/store', ['as' => 'projectreward.store' , 'uses' => 'ProjectRewardController@store']);
//Route::get('projectreward/{id}', ['as' => 'projectreward.show' , 'uses' => 'ProjectRewardController@show']);
Route::get('projectreward/edit/{id}/{step}', ['as' => 'projectreward.edit' , 'uses' => 'ProjectRewardController@edit']);
Route::post('projectreward/update', ['as' => 'projectreward.update' , 'uses' => 'ProjectRewardController@update']);
Route::get('projectreward/destroy/{id}', ['as' => 'projectreward.destroy' , 'uses' => 'ProjectRewardController@destroy']);
Route::patch('projectreward/{id}'       , ['as' => 'projectreward.update' , 'uses' => 'ProjectRewardController@update']);

//project qanda
//Route::get('projectqanda/create/{id}/{step}', ['as' => 'projectqanda.create' , 'uses' => 'ProjectQandaController@create']);
Route::post('projectqanda/store', ['as' => 'projectqanda.store' , 'uses' => 'ProjectQandaController@store']);
//Route::get('projectqanda/{id}', ['as' => 'projectqanda.show' , 'uses' => 'ProjectQandaController@show']);
//Route::get('projectqanda/edit/{id}', ['as' => 'projectqanda.edit' , 'uses' => 'ProjectQandaController@edit']);
Route::post('projectqanda/update', ['as' => 'projectqanda.update' , 'uses' => 'ProjectQandaController@update']);
Route::get('projectqanda/destroy/{id}', ['as' => 'projectqanda.destroy' , 'uses' => 'ProjectQandaController@destroy']);
Route::patch('projectqanda/{id}'       , ['as' => 'projectqanda.update' , 'uses' => 'ProjectQandaController@update']);

//follow project
Route::get('followproject/store/{id}', ['as' => 'followproject.store' , 'uses' => 'FollowProjectController@store']);
//Route::get('followproject/{id}', ['as' => 'followproject.show' , 'uses' => 'FollowProjectController@show']);
Route::get('followproject/destroy/{id}', ['as' => 'followproject.destroy' , 'uses' => 'FollowProjectController@destroy']);

//starter
Route::get('starter/create', ['as' => 'starter.create' , 'uses' => 'StarterController@create']);
Route::post('starter/store', ['as' => 'starter.store' , 'uses' => 'StarterController@store']);
Route::post('starter/store2', ['as' => 'starter.store2' , 'uses' => 'StarterController@postChooseStarter']);
Route::get('starter/edit/{id}', ['as' => 'starter.edit' , 'uses' => 'StarterController@edit']);
Route::post('starter/update', ['as' => 'starter.update' , 'uses' => 'StarterController@update']);
Route::get('starter/destroy/{id}', ['as' => 'starter.destroy' , 'uses' => 'StarterController@destroy']);
Route::patch('starter/{id}'       , ['as' => 'starter.update' , 'uses' => 'StarterController@update']);

//sponsorsponsorid
Route::get('sponsor/create/{id}/{sponsorid}/{step}', ['as' => 'sponsor.create' , 'uses' => 'SponsorController@create']);
Route::post('sponsor/store', ['as' => 'sponsor.store' , 'uses' => 'SponsorController@store']);
Route::post('sponsor/store2', ['as' => 'sponsor.store2' , 'uses' => 'SponsorController@store2']);
//Route::get('sponsor/edit/{id}', ['as' => 'sponsor.edit' , 'uses' => 'SponsorController@edit']);
//Route::post('sponsor/update', ['as' => 'sponsor.update' , 'uses' => 'SponsorController@update']);
//Route::get('sponsor/destroy/{id}', ['as' => 'sponsor.destroy' , 'uses' => 'SponsorController@destroy']);
//Route::patch('sponsor/{id}', ['as' => 'sponsor.update' , 'uses' => 'SponsorController@update']);

//sponsor
Route::post('sponsorproject/store', ['as' => 'sponsorproject.store' , 'uses' => 'SponsorProjectController@store']);


//Payment
Route::get('payment/{pid}/{rid}', ['as' => 'payment.create' , 'uses' => 'PaymentController@create']);
Route::post('payment/store', ['as' => 'payment.store' , 'uses' => 'PaymentController@store']);
Route::get('payment2/{pid}/{rid}', ['as' => 'payment.create2' , 'uses' => 'PaymentController@create2']);
Route::get('payment2/check/store/{pid}', ['as' => 'payment.store2' , 'uses' => 'PaymentController@store2']);
//Route::get('payment2/{pid}/{rid}/{step}', ['as' => 'payment.create2' , 'uses' => 'PaymentController@create2']);



//Admin.Project
Route::get('admin/project/{status}', ['as' => 'admin.project' , 'uses' => 'AdminProjectController@index']);
Route::get('admin/project/show/{id}', ['as' => 'admin.project.show' , 'uses' => 'AdminProjectController@show']);
//Route::get('admin/project/edit/{id}', ['as' => 'admin.project.edit' , 'uses' => 'AdminProjectController@edit']);
//Route::patch('admin/project/{id}', ['as' => 'admin.project.update' , 'uses' => 'AdminProjectController@update']);
Route::get('admin/project/destroy/{id}', ['as' => 'admin.project.destroy' , 'uses' => 'AdminProjectController@destroy']);
Route::get('admin/project/collection/{id}', ['as' => 'admin.project.collection' , 'uses' => 'AdminProjectController@collection']);


//Suggestion
//Route::get('admin/project/suggestion/create/{id}', ['as' => 'suggestion.create' , 'uses' => 'SuggestionController@create']);
Route::get('admin/project/suggestion/store/{id}', ['as' => 'suggestion.store' , 'uses' => 'SuggestionController@store']);
Route::get('admin/project/suggestion/edit/{suggestion_id}', ['as' => 'suggestion.edit' , 'uses' => 'SuggestionController@edit']);
Route::patch('admin/project/suggestion/{id}', ['as' => 'suggestion.update' , 'uses' => 'SuggestionController@update']);
//Route::get('admin/project/suggestion/destroy/{id}', ['as' => 'suggestion.destroy' , 'uses' => 'SuggestionController@destroy']);
Route::get('projectpass/{id}', ['as' => 'project.pass' , 'uses' => 'SuggestionController@projectpass']);
Route::get('projectnotice/{id}', ['as' => 'project.notice' , 'uses' => 'SuggestionController@projectnotice']);
Route::get('projectdownload/{id}', ['as' => 'project.download' , 'uses' => 'SuggestionController@projectdownload']);

//Admin.User
Route::get('admin/user', ['as' => 'admin.user' , 'uses' => 'AdminUserController@index']);
Route::get('admin/user/show/{id}', ['as' => 'admin.user.show' , 'uses' => 'AdminUserController@show']);
//Route::get('admin/user/edit/{id}', ['as' => 'admin.user.edit' , 'uses' => 'AdminUserController@edit']);
//Route::patch('admin/user/{id}', ['as' => 'admin.user.update' , 'uses' => 'AdminUserController@update']);
Route::get('admin/user/destroy/{id}', ['as' => 'admin.user.destroy' , 'uses' => 'AdminUserController@destroy']);

Route::get('admin/user/message/{id}', ['as' => 'message.create' , 'uses' => 'MessageController@create']);
Route::post('admin/user/message/store', ['as' => 'message.store' , 'uses' => 'MessageController@store']);

//Admin.Sponsor

Route::get('admin/sponsor', ['as' => 'admin.sponsor' , 'uses' => 'AdminSponsorController@index']);
Route::get('admin/sponsor/show/{id}', ['as' => 'admin.sponsor.show' , 'uses' => 'AdminSponsorController@show']);
Route::get('admin/sponsor/edit/{id}', ['as' => 'admin.sponsor.edit' , 'uses' => 'AdminSponsorController@edit']);
Route::patch('admin/sponsor/{id}', ['as' => 'admin.sponsor.update' , 'uses' => 'AdminSponsorController@update']);
Route::get('admin/sponsor/destroy/{id}', ['as' => 'admin.sponsor.destroy' , 'uses' => 'AdminSponsorController@destroy']);


//User_Message
Route::get('user/message/{id}', ['as' => 'user.message' , 'uses' => 'MessageController@index']);
Route::get('user/message_content/{id}/{mid}', ['as' => 'message.show' , 'uses' => 'MessageController@show']);
Route::post('user/message/destroy', ['as' => 'message.destroy' , 'uses' => 'MessageController@destroy']);

//footer
Route::get('about',['as'=>'about','uses'=>'HomeController@about']);
Route::get('contactus',['as'=>'contactus.create','uses'=>'HomeController@contactus']);
Route::post('contactus',['as'=>'contactus.send','uses'=>'HomeController@send_mail']);
Route::get('docs/faq',['as'=>'docsfaq','uses'=>'HomeController@docsfaq']);
//Route::get('docs/faq',['as'=>'docsfaq','uses'=>'HomeController@docsfaq']);
Route::get('doc',['as'=>'doc','uses'=>'HomeController@doc']);

